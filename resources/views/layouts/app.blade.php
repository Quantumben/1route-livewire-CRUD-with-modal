<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
</head>
<body>

   @yield('content')




    {{-- Close Modal after student is been added --}}
    {{-- <script>
        window.livewire.on('StudentAdded', (id) => {
        $('#AddStudent' + id).modal('hide');
        })

        window.livewire.on('studentUpdated', (id) => {
        $('#updateStudent' + id).modal('hide');
        })
        // window.livewire.on('studentUpdated', ()=>{
        //     $('#updateStudent').modal('hide');
        // })
    </script> --}}
   <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

   @livewireScripts
</body>
</html>
