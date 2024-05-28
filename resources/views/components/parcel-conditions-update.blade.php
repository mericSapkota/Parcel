<div class="max-w-7xl py-12 mx-auto sm:px-6 lg:px-8  flex flex-col items-center">
  <p class="text-3xl font-bold">Add more details to this Parcel </p>
  <div class="max-w-xl py-12 ">
    <form method="post" action="/update/{{$p->parcel_id}}">
      @csrf
      <div class="flex flex-col gap-5 w-56 text-black">
        <label for="" class="">Parcel_ID</label>
        <input type="text" name="parcel_id" value="{{$p->parcel_id}}">
        <label for="status">Status</label>
        <input type="text" name="status" id="status">
        <label for="" class="">Enter Your Location</label>
        <input type="text" name="address" placeholder="Enter Location">
        <label for="date" class="">Select a date</label>
        <input type="date" name="date" id="date">
        <label for="time" class="">Select Time</label>
        <input type="time" name="time" id="time">

        <label for="" class="">Enter Remarks</label>
        <input type="text" name="remarks" placeholder="Enter Remarks">
        <button type="submit" class="bg-blue-800 rounded  text-white py-2">Update Parcel</button>
      </div>
    </form>
  </div>
</div>