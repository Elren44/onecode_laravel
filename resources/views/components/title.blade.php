<div class="border-bottom mb-4 pb-3">
    @isset($link)
        <div class="mb-3">
            {{$link}}
        </div>
    @endisset
   <div class="d-flex justify-content-between align-items-center">
       <h1 class="h2">{{$slot}}</h1>
       @isset($right)
           <div>
               {{$right}}
           </div>
       @endisset
   </div>
</div>
