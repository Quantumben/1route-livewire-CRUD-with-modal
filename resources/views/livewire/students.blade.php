<div>


@include('livewire.create')
@include('livewire.update')

<h2 class="text-xl text-center text-red-400 mb-5">All Student
    <div>
        <!-- Button trigger modal -->
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
    item-center
    ease-in-out" data-bs-toggle="modal" data-bs-target="#AddStudent">
    Add Student
    </button>
    <!-- Button trigger modal Ends Here-->
    </div>
</h2>
 <div class="flex flex-col">

    {{-- Display Error Message --}}
    @if(session()->has('message'))
    <div class="text-red-800">
        {{Session('message')}}
    </div>
    @endif
    {{-- Display Error Message Ends--}}

    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full">
            <thead class="border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  #
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  FirstName
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  LastName
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Email
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Phone
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                   Action
                  </th>
              </tr>
            </thead>

            <tbody>
        @foreach ($students as $student)
            <tr class="border-b">
                <td class="px-4 py-4  text-sm font-medium text-gray-900">{{$student->id}}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                 {{$student->firstname}}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$student->lastname}}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$student->email}}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$student->phone}}
                </td>

                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <button type="button" class="bg-blue-300 rounded-xl py-5 px-4"
                        data-bs-toggle="modal" data-bs-target="#updateStudent"
                        wire:click.prevent="edit({{$student->id}})">Edit</button>
                  </td>

                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <button type="button" class="bg-red-700 rounded-xl py-5 px-4"
                        wire:click.prevent="delete({{$student->id}})">Delete</button>
                </td>

            </tr>
        @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
