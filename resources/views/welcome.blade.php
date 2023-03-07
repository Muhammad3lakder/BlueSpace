<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>المركز الوطني </title>

    </head>
    <body >
      
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <h1>اليقظة الدوائية بالمركز الوطني لمكافحة</h1>
        <br>
        <h2>نموذج الابلاغ عن التفاعلات الدوائية الضارة</h2>

        <!-- /resources/views/auth.blade.php -->

        <h3>بيانات المريض</h3>
        <form method="POST" action="/">
            @csrf
            <label for="name">الاسم</label>
            <input id="name" type="text" autofucous autocomplete="off">

            <label for="File number">رقم الملف</label>
            <input id="File number" type="nubmer" autofucous autocomplete="off">

            <label for="Gender">الجنس</label>
            <select name="Gender">
            <option value="Male">
                ذكر
            </option>
            <option value="Female">
                أنثي
            </option>
            </select>
            <button type="submit">سجل</button> 
        </form>
        
    </body>
</html>
