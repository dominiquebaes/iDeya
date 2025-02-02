@extends('layouts.app')

@section('content')
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <div class="card-header">
                    <h5>Not an event participant? Sign up here:</h5>
                    <div class="btn-group" role="group">
                        <a class="btn btn-outline-secondary" id="Co-Working-Guest" href="{{route('registration')}}">Guest</a>
                    </div>
                </div>
                <div class="card-body">
                    @unless(!$ongoingEvent)
                    <h3>Featured</h3>
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-title"><h5 class="display-4">{{$ongoingEvent->title}}</h5></div>
                    <h5>{{$ongoingEvent->eventType->name}}<br>
                    Date: {{$ongoingEvent->date}}<br><br>
                    {{$ongoingEvent->description}}<br><br>
                    Registration Fee: {{$ongoingEvent->reg_fee}}</h5><br><br>
                    <h5>Interested?</h5>
                    <a href="{{route('register', compact('ongoingEvent'))}}" class="btn btn-lg btn-success">Register Now</a>
                    <p class="card-text"><small class="text-muted"><a href="{{route('event.seedetails', compact('ongoingEvent'))}}">See Details</a></small></p>
                    @endunless
                </div>
                <div class="card-footer card-group">
                    @foreach($upcomingEvents as $event)
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h class="card-title display-4">{{$event->title}}</h><br>
                            <h>Type: {{$event->eventType->name}}<br>
                            <strong>Date: {{$event->date}}</strong></h><br>
                            <p class="card-text">{{$event->description}}</p>
                            <p class="card-text"><small class="text-muted"><a href="{{route('event.seedetails', compact('event'))}}">See Details</a></small></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> -->
<style>     
         /* ----------------------------------------------
         * Generated by Animista
         * w: http://animista.net, t: @cssanimista
         * ---------------------------------------------- */
         
        .slide-in-bottom{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both}
        .slide-in-bottom-h1{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both}
        .slide-in-bottom-subtitle{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both}
        .fade-in{-webkit-animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both;animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both}
        .bounce-top-icons{-webkit-animation:bounce-top .9s 1s both;animation:bounce-top .9s 1s both}
        
        @-webkit-keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}
        @-webkit-keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}@keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}
        @-webkit-keyframes fade-in{0%{opacity:0}100%{opacity:1}}@keyframes fade-in{0%{opacity:0}100%{opacity:1}}
                
    </style>
<div class="h-screen pb-14 bg-right bg-cover mt-16">
    <!--Nav-->
    <div class="w-full container mx-auto p-6">
            
        <div class="w-full flex items-center justify-between">            
            <div class="flex w-1/2 justify-end content-center">     
                <a class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4" data-tippy-content="@twitter_handle" href="https://twitter.com/intent/tweet?url=#">
                    <svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path></svg>
                </a>
                <a class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 " data-tippy-content="#facebook_id" href="https://www.facebook.com/sharer/sharer.php?u=#">
                    <svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path></svg>
                </a>
            </div>
            
        </div>

    </div>

    <!--Main-->
    <div class="container pt-24 md:pt-48 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        
        <!--Left Col-->
        @unless(!$ongoingEvent)
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
            <h1 class="my-4 text-3xl md:text-5xl text-gray-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">{{$ongoingEvent->title}}</h1>
            <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">{{$ongoingEvent->description}}</p>
            <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle"><?php echo date('F j, Y', strtotime($event->date)); ?></p>
        
           
            <p class="text-gray-800 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">Already Registered?</p>
            <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
                <!--<img src="App Store.svg" class="h-12 pr-4 bounce-top-icons">-->
                <a href="{{route('participant.signin', compact('ongoingEvent'))}}">
                    <button class="border-red-500 border p-2 px-4 rounded-full text-red-700 bg-transparent hover:bg-red-700 hover:text-white hover:border-gray-200 font-bold bounce-top-icons">Sign In</button>
                </a>
            </div>

             <p class="text-gray-800 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">Interested?</p>
            <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
                <!--<img src="App Store.svg" class="h-12 pr-4 bounce-top-icons">-->
                <a href="{{route('register', compact('ongoingEvent'))}}">
                    <button class="border-red-500 border p-2 px-4 rounded-full text-red-700 bg-transparent hover:bg-red-700 hover:text-white hover:border-gray-200 font-bold bounce-top-icons">Register Now</button>
                </a>
            </div>


        </div>
        @endunless
        
        <!--Right Col-->
        <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
            <img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom" src="/images/devices.svg">
        </div>
        
        <!--Footer-->
        <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
            <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; iDeya 2019</a>
        </div>
        
    </div>

    <div class="container mx-auto mb-20 px-20">
        <div class="p-4">
            <h1 class="text-6xl font-semibold text-center text-gray-700">Upcoming Events</h1>
        </div>
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            <!-- Column -->
        @foreach($upcomingEvents as $event)
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                 <div class="min-w-32 bg-white min-h-48 p-3 mb-4 font-medium">
                <div class="w-32 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center mx-auto">
                  <div class="block rounded-t overflow-hidden  text-center">
                    <div class="bg-red-700 text-white py-1" id="month">
                            <?php 
                                echo date('F',strtotime($event->date));
                             ?>                    
                        </div>
                    <div class="pt-1 border-l border-r border-white bg-white">
                      <span class="text-5xl font-bold leading-tight">
                        <?php 
                                echo date('j',strtotime($event->date));
                             ?>   
                      </span>
                    </div>
                    <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1">
                      <span class="text-sm">
                        <?php 
                                echo date('l',strtotime($event->date));
                         ?>   
                      </span>
                    </div>
                    <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white">
                      <span class="text-xs leading-normal">
                        8:00 am to 5:00 pm
                      </span>
                    </div>
                  </div>
                </div>
              </div> 
                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black font-semibold" href="#">
                            {{$event->title}}
                        </a>
                    </h1>
                    </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            Type
                        </p>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="text-sm">{{$event->eventType->name}}</span>
                    </a>
                </footer>
                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            Date
                        </p>
                    </a>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="text-sm">{{$event->date}}</span>
                    </a>
                </footer>
                <div class="p-4 text-justify">
                    <p>{{$event->description}}</p>

                </div>
                <div class="text-center pb-4">
                    <a href="{{route('event.seedetails', compact('event'))}}" class="text-blue-400 hover:underline">See Details</a>
                </div>
            </article>
            <!-- END Article -->

        </div>
        @endforeach


        </div>
@endsection
