<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}

        <!-- Styles -->
        <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/masterLayout.css" rel="stylesheet">
        <link href="/css/laravel.css" rel="stylesheet">
    </head>
    <body>
        @include('layouts/nav')
        <div class="flex-center position-ref">

            <div class="content">
                <div class="links">
                  <div class="txt">
                    TASKS:
                  </div>
                  <hr  />
                  <?php // foreach ($tasks as $task): ?>
                  <!-- <li><?php // echo $task; ?></li> -->
                  <?php // endforeach; ?>

                  <!-- Can be replaced with:  -->
                  @foreach($tasks as $task)
                      <a href="/tasks/{{ $task->id }}">{{ $task->body }}</a>
                  @endforeach
                </div>
            </div>
        </div>

        @include('layouts/footer')

    </body>
</html>
