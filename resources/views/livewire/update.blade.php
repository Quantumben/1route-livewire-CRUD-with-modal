<div>
    <!-- Modal -->
<div wire:ignore.self class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
id="updateStudent" tabindex="-1" aria-labelledby="updateStudentLabel" aria-hidden="true">
<div class="modal-dialog relative w-auto pointer-events-none">
  <div
    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
    <div
      class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
      <h5 class="text-xl font-medium leading-normal text-gray-800" id="updateStudentLabel">Edit Student</h5>
      <button type="button"
        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
        data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body relative p-4">

      {{-- Form Starts Here --}}

      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
          <form>

            <div class="form-group mb-6">
                <input type="hidden" name="ids" wire:model="ids">
            </div>

            <div class="form-group mb-6">
              <input type="text" name="firstname" wire:model="firstname" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                placeholder="FirstName">

                @error('firstname')
                  <span class="text-red-600">
                      {{$message}}
                  </span>
                @enderror
            </div>

            <div class="form-group mb-6">
              <input type="text" name="lastname" wire:model="lastname" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                placeholder="LastName">

                @error('lastname')
                  <span class="text-red-600">
                      {{$message}}
                  </span>
                @enderror
            </div>

            <div class="form-group mb-6">
              <input type="email" name="email" wire:model="email" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
                placeholder="Email address">

                @error('email')
                  <span class="text-red-600">
                      {{$message}}
                  </span>
                @enderror
            </div>
            <div class="form-group mb-6">
              <textarea name="phone" wire:model="phone"
              class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              "
              rows="3"
              placeholder="Phone Number"
            ></textarea>

            @error('phone')
                  <span class="text-red-600">
                      {{$message}}
                  </span>
            @enderror
            </div>
          </form>
        </div>


      {{-- Form Ends Here --}}
    </div>
    <div
      class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
      <button type="button" class="px-6
        py-2.5
        bg-purple-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-purple-700 hover:shadow-lg
        focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-purple-800 active:shadow-lg
        transition
        duration-150
        ease-in-out" data-bs-dismiss="modal">Close</button>
      <button type="button" class="px-6
    py-2.5
    bg-blue-600
    text-white
    font-medium
    text-xs
    leading-tight
    uppercase
    rounded
    shadow-md
    hover:bg-blue-700 hover:shadow-lg
    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
    active:bg-blue-800 active:shadow-lg
    transition
    duration-150
    ease-in-out
    ml-1" wire:click.prevent="update()">Update Student</button>
    </div>
  </div>
</div>
</div>

<script>
     $('#updateStudent').submit(function(e) {
    e.preventDefault();
    // Coding
    $('#updateStudent').modal('toggle'); //or  $('#IDModal').modal('hide');
    return false;
});
</script>
</div>
