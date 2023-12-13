@extends('layouts\main')
@section('nav') @extends('layouts.nav')
@section('content')
{{-- content --}}
<div class="grid grid-cols-3 gap-2 w-full m-1 relative">

    <div class="content-display-block col-span-2 max-h-96 ">
        <div class="content-title  ">Urgent</div>

        <div class="add-tasks ">
            <a href=""><span class="add-task-link">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                        
                <span class="add-task-text ">Add Tasks</span>
            </span></a>
        </div>  
        
        @foreach ($upcoming_tasks as $uptask )
        <div class="content-list">
            <a href="" class="add-content-link">
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                    </svg>
                    </span>
                    <span class="add-content-content "> {{$uptask->task_title}}</span>
            </a>

        </div>
        @endforeach

    </div>


    <div class="content-display-block row-span-1 max-h-96 ">
        <div class="content-title  ">Completed</div>
        <div class="content-list">
            <a href="" class="add-content-link">
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                  </svg>
                  </span>
                  {{-- <span class="add-content-content"> {{$upcoming_tasks=>task_title}}</span> --}}
            </a>

        </div>
    </div>


    <div class="content-display-block max-h-96">
        <div class="content-title  ">Tomorrow</div>

        <div class="add-tasks ">
            <a href=""><span class="add-task-link">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg>
                      
                <span class="add-task-text ">Add Task</span>
            </span></a>
        </div>  
    
        @foreach ($tomorrow_tasks as $tomtask)
        <div class="content-list ">
            <a href="" class="add-content-link">
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                  </svg>
                  </span>
                  <span class="add-content-content"> {{$tomtask->task_title}}</span>
            </a>

        </div>
        @endforeach

    </div>
    <div class="content-display-block max-h-96">
        <div class="content-title  ">This Week</div>

        <div class="add-tasks ">
            <a href=""><span class="add-task-link">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg>
                      
                <span class="add-task-text ">Add Tasks</span>
            </span></a>
        </div>  
        
        @foreach ($thisweek_tasks as $this_week)
        <div class="content-list">
            <a href="" class="add-content-link">
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                  </svg>
                  </span>
                  <span class="add-content-content"> {{$this_week->task_title}}</span>
            </a>

        </div>
        @endforeach

    </div>
    
    <div class="content-display-block row-span-1 max-h-96 ">
        <div class="content-title ">Missed</div>
        <div class="content-list">
            <a href="" class="add-content-link">
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                  </svg>
                  </span>
                  {{-- <span class="add-content-content"> {{$upcoming_tasks=>task_title}}</span> --}}
            </a>

        </div>
    </div>
</div>

@endsection


