<div align="center">

    @if(!Session::get('user'))
    <a class="btn btn-primary" href="{{route('login')}}">Login</a>
    <a class="btn btn-success" href="{{route('registration')}}">Registration</a>
    @endif

    <a class="btn btn-primary" href="/index">Index</a>

    @if(Session::get('user'))
        <!-- <a href="{{route('registration')}}">Registration |</a> -->
        <a class="btn btn-danger" href="/student/create">Create Student</a>
        <a class="btn btn-primary" href="/student/edit">Edit Student</a>
        <a class="btn btn-secondary" href="{{route('student.list')}}">Student List</a>
        <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
    @endif
    @if(Session::get('userT'))
        <a class="btn btn-primary" href="{{route('department.list')}}">Departments</a>

        <a class="btn btn-secondary" href="{{route('teacher.list')}}">Teacher List</a>
        <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
    @endif
        
</div>