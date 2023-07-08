<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Curriculum Vitae</title>
    <style>
        /* CSS styling untuk CV */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }
        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        p {
            margin-bottom: 10px;
        }
        .section {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Curriculum Vitae</h1>
    
    <div class="section">
        <h2>Personal Information</h2>
        <p>Name: Name</p>
        <p>Email: email</p>
        <p>Phone: hp</p>
        <p>Address: Alamat</p>
    </div>
    
    <div class="section">
        <h2>Education</h2>
        <p>University: UNINUS</p>
        <p>Year of Graduation: s1</p>
    </div>
    
    <div class="section">
        <h2>Work Experience</h2>
        
        <p>data pengalaman</p>
        {{-- @foreach ($experiences as $experience)
            <h3>{{ $experience['title'] }}</h3>
            <p>{{ $experience['duration'] }}</p>
            <p>{{ $experience['description'] }}</p>
        @endforeach --}}
    </div>
</body>
</html>
