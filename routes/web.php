<?php
//frontend


use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\SportsController as FSportsController;
use App\Http\Controllers\Frontend\PlayerController;

//backend
use App\Http\Controllers\Backend\AttendanceController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\MasterController;
use App\Http\Controllers\Backend\PlayersController;
use App\Http\Controllers\Backend\SportsController;
use App\Http\Controllers\Backend\HomeController ;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\MembersController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\TrainerController;
use App\Http\Controllers\Backend\TrainingScheduleController;
use App\Http\Controllers\Backend\GroundController;
use App\Http\Controllers\Backend\PlayingScheduleController;
use App\Http\Controllers\Backend\SubscriptionController;
use App\Http\Controllers\Frontend\CoachController;
use App\Http\Controllers\Frontend\EventController as FrontendEventController;
use App\Http\Controllers\Frontend\GroundController as FrontendGroundController;
use App\Http\Controllers\Frontend\PlayerRegistrationController;
use App\Http\Controllers\Frontend\PlayingController;
use App\Http\Controllers\Frontend\TeamController as FrontendTeamController;
use App\Http\Controllers\Frontend\TrainingController;
use Illuminate\Support\Facades\Route;
use Nette\MemberAccessException;


   //Back-End 
Route::group(['prefix'=>'admin'], function() {
     Route::get('/login',[LoginController::class,'login'])->name('login');
     Route::post('/do_login',[LoginController::class,'do_login'])->name('sign_in');

     Route::group(['middleware'=>'auth'], function(){


          Route::get('/logout',[LoginController::class,'logout'])->name('logout');
          Route::get('/',[MasterController::class,'master']);
      
        Route::get('/home',[HomeController::class,'home'])->name('home');
         //Gallery
          Route::get('/gallery', [GalleryController::class, 'gallery'])->name('galleryb');
          Route::post('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
          Route::get('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store'); 
        //sports
        Route::get('/sports',[SportsController::class,'sports'])->name('sportsb');
        Route::get('/sports-store',[SportsController::class,'sports_store'])->name('sports.store');
        Route::post('/sports-create',[SportsController::class,'sports_create'])->name('sports.create');


        //Club Members Role

          Route::get('/club_members_list',[MembersController::class,'club_members_role'])->name('club.members');
          Route::post('/club_members/create',[MembersController::class,'club_members_create'])->name('clubmembers.create');
          Route::get('/club_members/store',[MembersController::class,'club_members_store'])->name('clubmembers.store');
          Route::get('/club_members_delete/{id}',[MembersController::class,'role_delete'])->name('members.role.delete');
        
        //Trainer
        Route::get('/trainer',[TrainerController::class,'trainer'])->name('trainer');
        Route::get('/trainer/store',[TrainerController::class,'trainer_store'])->name('trainer.store');
        Route::post('/trainer/create',[TrainerController::class,'trainer_create'])->name('trainer.create');
        Route::get('/trainer/delete/{id}',[TrainerController::class,'delete'])->name('trainer.delete');
        Route::get('/trainer/edit/{id}',[TrainerController::class,'edit'])->name('trainer.edit');
        Route::put('/trainer/update/{id}',[TrainerController::class,'update'])->name('trainer.update');

        //Team
        Route::get('/team', [TeamController::class, 'team'])->name('teamb');
        Route::get('/team-create', [TeamController::class, 'create'])->name('team.create');
        Route::post('/team-store', [TeamController::class, 'store'])->name('team.store');
        Route::get('/team/delete/{id}',[TeamController::class,'delete'])->name('team.delete');
        Route::get('/team/edit/{id}',[TeamController::class,'edit'])->name('team.edit');
        Route::put('/team/update/{id}',[TeamController::class,'update'])->name('team.update');
       
            //training schedules
           Route::get('/training-schedule',[TrainingScheduleController::class,'tschedule'])->name('training_schedule');
           Route::get('/training-schedule-list',[TrainingScheduleController::class,'tschedule_list'])->name('training_schedule.list');
           Route::post('/training-schedule-create',[TrainingScheduleController::class,'tschedule_create'])->name('training_schedule.create');
           Route::get('/tschedule/delete/{id}',[TrainingScheduleController::class,'delete'])->name('tschedule.delete');
           Route::get('/tschedule/edit/{id}',[TrainingScheduleController::class,'edit'])->name('tschedule_edit');
           Route::put('/tschedule/update/{id}',[TrainingScheduleController::class,'update'])->name('tschedule.update');
         
        
          // playing schedule
           Route::get('/playing-schedule',[PlayingScheduleController::class,'schedule'])->name('schedule');
           Route::get('/playing-Schedule-create',[PlayingScheduleController::class,'create'])->name('schedule.create');
           Route::post('/playing-Schedule-store',[PlayingScheduleController::class,'store'])->name('schedule.store');
           Route::get('/schedule/delete/{id}',[PlayingScheduleController::class,'delete'])->name('schedule.delete');
           Route::get('/schedule/edit/{id}',[PlayingScheduleController::class,'edit'])->name('schedule.edit');
           Route::put('/schedule/update/{id}',[PlayingScheduleController::class,'update'])->name('schedule.update');
           

       
       
          //Players
          Route::get('players', [PlayersController::class, 'index'])->name('players.index');
          Route::get('players/{id}', [PlayerController::class, 'show'])->name('players.show');
          Route::get('best-teams', [PlayerController::class, 'bestTeams'])->name('players.bestTeams'); 
        // Route::get('/player/delete/{id}',[PlayersController::class,'delete'])->name('player.delete');
        // Route::get('/player/edit/{id}',[PlayersController::class,'edit'])->name('player.edit');
        // Route::put('/player/update/{id}',[PlayersController::class,'update'])->name('player.update');
        
        //Ground Info For Admin
        Route::get('/ground',[GroundController::class,'ground'])->name('ground');
        Route::get('/ground-list',[GroundController::class,'groundlist'])->name('ground.list');
        Route::post('/ground-form',[GroundController::class,'groundform'])->name('ground.form');
        Route::get('/ground/delete/{id}',[GroundController::class,'delete'])->name('ground.delete');
        Route::get('/ground/edit/{id}',[GroundController::class,'edit'])->name('ground.edit');
        Route::put('/ground/update/{id}',[GroundController::class,'update'])->name('ground.update');

        //attandence
        Route::get('/view-attendance',[AttendanceController::class,'view'])->name('attendance.view');
        Route::post('/create-attendance',[AttendanceController::class,'create'])->name('attendance.create');
        Route::get('/store-attendance',[AttendanceController::class,'store'])->name('attendance.store');

        // event
        Route::get('/events', [EventController::class, 'list'])->name('events.list'); // List all events
        Route::get ('/event-create',[EventController::class,'eventcreate'])->name('events.create');
        Route::post ('/event-store',[EventController::class,'eventstore'])->name('events.store');
        });

        Route::get('/events-edit/{id}', [EventController::class, 'edit'])->name('events.edit'); // Edit an event
        Route::put('/events-update/{id}', [EventController::class, 'update'])->name('events.update'); // Update an event
        Route::get('/events/{id}', [EventController::class, 'delete'])->name('events.delete'); // Delete an event

        //Subscription
        Route::get('subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index'); // List all subscriptions
        Route::get('subscriptions/create', [SubscriptionController::class, 'create'])->name('subscriptions.create'); // Show form to create a new subscription
        Route::post('subscriptions', [SubscriptionController::class, 'store'])->name('subscriptions.store'); // Store new subscription
        Route::get('subscriptions/{subscription}/edit', [SubscriptionController::class, 'edit'])->name('subscriptions.edit'); // Show form to edit a subscription
        Route::put('subscriptions/{subscription}', [SubscriptionController::class, 'update'])->name('subscriptions.update'); // Update subscription
        Route::delete('subscriptions/{subscription}', [SubscriptionController::class, 'destroy'])->name('subscriptions.destroy'); 
     });    
    
     
     
     
     
     
     
     
     
     
     
     
    //frontend routes
    Route::post('/player-login',[PlayerController::class,'login'])->name('player.login');
    
    Route::get('/show-registration',[PlayerController::class,'registrationForm'])->name('player.registration');
    
    Route::post('/player-registration',[PlayerController::class,'registration'])->name('player.registration.store');
    Route::get('/player-logout',[PlayerController::class,'logout'])->name('player.logout');
Route::get('/',[FrontendHomeController::class,'home'])->name('frontend.home');

Route::get('/home',[FrontendHomeController::class,'home'])->name('frontend.home');
Route::get('/read-more',[FrontendHomeController::class,'read_more'])->name('frontend.read_more');
Route::get('/sports-view',[FSportsController::class,'view'])->name('sports.view');
Route::get('/training-schedule-view',[TrainingController::class,'view'])->name('training.view');
Route::get('/playing-schedule-view',[PlayingController::class,'view'])->name('playing.view');
Route::get('/ground-details-view',[FrontendGroundController::class,'view'])->name('ground.view');
Route::get('/player-view',[PlayerController::class,'view'])->name('player.view');
Route::get('/coach-view',[CoachController::class,'view'])->name('coach.view');
Route::get('/team-view',[FrontendTeamController::class,'view'])->name('team.view');


   Route::get('/events', [FrontendEventController::class, 'index'])->name('player.events.index');
   Route::post('/events/{id}/apply', [FrontendEventController::class, 'apply'])->name('player.events.apply');

   //player registration
   Route::get('player/register', [PlayerRegistrationController::class, 'create'])->name('player.register');
Route::post('player/register', [PlayerRegistrationController::class, 'store'])->name('player.store');
Route::get('player/success', [PlayerRegistrationController::class, 'success'])->name('player.success');









