<body>

  <div class="flex w-full gap-5 justify-center relative ">
    <div class="mt-5 w-4/6  flex flex-col text-end ">
      <p name="date" class="font-bold text-xl">{{$p['date']}}</p>
      <p name="time" class="text-end text-sm text-lg">{{$p['time']}}</p>
    </div>
    <div class="bg-black  z-1 w-[1px] ">
      <div><img class="" src="" alt=""></div>
    </div>
    <div class="mt-5 w-4/6 flex  justify-between text-start ">
      <div class="flex-col">
        <p name="status" class=" font-bold text-xl">{{$p['status']}}</p>
        <p name="remarks" class=" text-sm text-lg">{{$p['remarks']}}</p>
      </div>

      @if(Auth::check())
      <div class=" absolute right-0">
        <a href="edit-conditions/{{$p['id']}}"><button>Edit</button></a>
        <a href="delete-conditions/{{$p['id']}}"><button>Delete</button></a>
      </div>
      @endif
    </div>
  </div>





</body>