<?php

namespace Modules\Event\Http\Controllers\Backend;

use Modules\Event\Http\Requests\EventRequest;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Event\Entities\Event;

use Auth;
use File;

use App\Models\EventUser;
use Intervention\Image\Facades\Image;


class EventController extends Controller
{
  public function __construct()
  {
    // Page Title
    $this->module_title   = 'Events';

    // module name
    $this->module_name    = 'event';

    // directory path of the module
    $this->module_path    = 'events';

    // route path
    $this->route_path     = 'events';

    // module icon
    $this->module_icon    = 'fas fa-calendar-alt';

    // module model name, path
    $this->module_model   = "Modules\Event\Entities\Event";
  }

  /**
  * Display a listing of the resource.
  * @return Response
  */
  public function index()
  {

    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_path    = $this->module_path;
    $route_path     = $this->route_path;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;

    $module_action  = 'List';

    $events = $module_model::orderBy('id','desc')->get();


    return view("$module_name::backend.$route_path.index", compact(
      'events',
      'module_path',
      'route_path',
      'module_title',
      'module_action',
      'module_name',
      'module_icon'
    ));

  }

  /**
  * Show the form for creating a new resource.
  * @return Response
  */
  public function create()
  {
    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $route_path     = $this->route_path;
    $module_icon    = $this->module_icon;
    $module_path    = $this->module_path;
    // $module_model = $this->module_model;

    $module_action = 'Create';

    return view("$module_name::backend.$route_path.create", compact(
      'module_path',
      'route_path',
      'module_title',
      'module_action',
      'module_name',
      'module_icon'
    ));

  }

  /**
  * Store a newly created resource in storage.
  * @param Request $request
  * @return Response
  */
  public function store(EventRequest $request)
  {

    // dd($request->all());

    $module_model   = $this->module_model;
    $route_path     = $this->route_path;


    /*$photo = $request->file('image');

    if ($request->file('image')) {
      $fileName = time().'.'.$photo->getClientOriginalExtension();
      $move = $photo->move('assets/images/event/', $fileName);
    }*/
    if ($request->hasFile('image')){
      $imageName = time().'.'.request()->file('image')->getClientOriginalExtension();
      request()->file('image')->move('assets/images/event/', $imageName);
      $image = Image::make("assets/images/event/"."{$imageName}")->resize(800, 480);
      $image->save();
    }


    $module_model::create([
      'title'                 => $request->title,
      'date_time'             => $request->date_time,
      'description'           => $request->description,
      'ticket_book'           => $request->ticket_book,
      'starting_time'         => $request->starting_time,
      'ending_time'           => $request->ending_time,
      'ticket_money'          => $request->ticket_money,
      'place'                 => $request->place,
      'location'              => $request->location,
      'image'                 => isset($imageName) ? $imageName : '',
      'created_by'            => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', "Event Created Successfully!");

  }

  /**
  * Show the specified resource.
  * @param int $id
  * @return Response
  */
  public function show($id)
  {
    return view('event::show');
  }

  /**
  * Show the form for editing the specified resource.
  * @param int $id
  * @return Response
  */
  public function edit($id)
  {
    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_path    = $this->module_path;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;
    $route_path     = $this->route_path;

    $module_action = 'Update';

    $event = $module_model::findOrFail($id);


    return view("$module_name::backend.$module_path.edit",compact(
      'module_name',
      'event',
      'route_path',
      'module_title',
      'module_path',
      'module_icon',
      'module_model',
      'module_action'
    ));

  }

  /**
  * Update the specified resource in storage.
  * @param Request $request
  * @param int $id
  * @return Response
  */
  public function update(Request $request, Event $event)
  {
    $route_path = $this->route_path;
    $module_path = $this->module_path;

/*
    $photo = $request->file('image');

    if ($request->file('image')) {

      $fileName = time().'.'.$photo->getClientOriginalExtension();
      $move = $photo->move('assets/images/event/', $fileName);
*/
      if ($request->hasFile('image')){
      $imageName = time().'.'.request()->file('image')->getClientOriginalExtension();
      request()->file('image')->move('assets/images/event/', $imageName);
      $image = Image::make("assets/images/event/"."{$imageName}")->resize(800, 480);
      $image->save();

      if(File::exists('assets/images/event/'.$event->image)){
        unlink('assets/images/event/'.$event->image);
      }
    }

    $event->update([
      'title'             => $request->title,
      'date_time'         => $request->date_time,
      'description'       => $request->description,
      'ticket_book'       => $request->ticket_book,
      'starting_time'     => $request->starting_time,
      'ending_time'       => $request->ending_time,
      'ticket_money'      => $request->ticket_money,
      'place'             => $request->place,
      'location'          => $request->location,
      'image'             => isset($imageName) ? $imageName : $event->image,
      'updated_by'        => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', 'Event Updated Successfully');

  }

  public function published(Event $event)
  {
    $route_path = $this->route_path;

    $event->update([
      'publication_status'      => 1,
      'updated_by'              => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', 'Event Updated Successfully');
  }

  public function unpublished(Event $event)
  {

    $route_path = $this->route_path;

    $event->update([
      'publication_status'      => 0,
      'updated_by'              => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', 'Event Updated Successfully');

  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy(Event $event)
  {
    if(!empty($event->image)){

      if(File::exists('assets/images/event/'.$event->image)){
        unlink('assets/images/event/'.$event->image);
      }

    }

    $event->delete();

    $event->update([
      'deleted_by'              => Auth::user()->id,
    ]);

    return back()->with('success','Deleted Successfully');
  }

  public function showEventUser($id)
  {
    $module_title = $this->module_title;
    $module_name = $this->module_name;
    $module_path = $this->module_path;
    $route_path = $this->route_path;
    $module_icon = $this->module_icon;
    $module_model = $this->module_model;

    $module_action = 'Event User List';

    $event_users = EventUser::where(array('event_id'=>$id))->orderBy('id','desc')->get();
    // dd($event_users[1]->event_user_transaction->amount);
    // dd($event_users[0]->event_user_transaction);

    return view("$module_name::backend.$route_path.event_users", compact('event_users','module_path','route_path','module_title','module_action','module_name','module_icon'));

  }

  public function participant(){

      return "Hello World";

  }

}
