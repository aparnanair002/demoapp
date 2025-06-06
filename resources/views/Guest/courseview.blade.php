<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Course Details</title>
</head>
<body>

  <h1>Available Courses</h1>
  @if ($courses->isEmpty())
    <p>No courses available at the moment.</p>
  @else

  <table>
    <thead>
      <tr>
        <th>Course Name</th>
        <th>Description</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($courses as $index => $course)
        <tr>
          <td>{{$index +1}}</td>
          <td>{{ $course->name }}</td>
          <td>{{ $course->description }}</td>
          <td><a href="{{route('delete_course',['id'=>$course->course_id])}}" 
          onclick="return confirm('Are you sure you want delete...??')"  ><button class="btn btn-danger">Delete</button></a></td>
           <td><a href="{{route('course_edit',['id'=>$course->course_id])}}" >
          <button class="btn btn-primary">edit</a></td>
        </tr>
      @endforeach
    </tbody>
    <caption>* More courses coming soon!</caption>
  </table>
@endif

</body>
</html>
