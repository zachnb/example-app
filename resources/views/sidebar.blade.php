<!-- resources/views/sidebar.blade.php -->
<nav class="sidebar">
    <ul class="nav">
        <li><a href="#">Introduction</a></li>
        @for ($i = 1; $i <= 10; $i++)
            <li><a href="#">Lesson {{ $i }}</a></li>
        @endfor
        <li><a href="#">Final Exam</a></li>
    </ul>
</nav>