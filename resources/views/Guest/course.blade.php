<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Course Entry Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 2rem;
      background: #f5f5f5;
    }
    h1 {
      text-align: center;
    }
    form {
      max-width: 400px;
      margin: 0 auto 2rem;
      background: white;
      padding: 1.5rem;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    input, textarea, button {
      width: 100%;
      margin-bottom: 1rem;
      padding: 0.75rem;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    button:hover {
      background: #45a049;
    }
    .course-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
    }
    .course-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      padding: 1rem;
      width: 300px;
      transition: transform 0.3s;
    }
    .course-card:hover {
      transform: scale(1.03);
    }
    .course-name {
      font-weight: bold;
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
    }
    .course-description {
      color: #444;
    }
  </style>
</head>
<body>

<h1>Add a New Course</h1>

<form action="{{route('courseinsert')}}" method="post">
    @csrf
  <input type="text" id="courseName" placeholder="Course Name" name="name" required />
  <textarea id="courseDescription" placeholder="Course Description" name="description" required></textarea>
  <button type="submit">Submit</button>

  @if (session('success'))
    <script>
        alert("{{ session('success') }}");
        window.location.href = "{{ route('courseview') }}";
    </script>
    @endif
      
</form>

<div class="course-container" id="courseList"></div>



</body>
</html>
