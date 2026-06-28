<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 6px rgba(13, 110, 253, 0.3);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #1f2937;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0b5ed7;
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>Registration Form</h2>

        <!-- @if(session('success'))
        <div style="background: lightblue; padding:10px; margin-bottom:15px;">
            {{ session('success') }}
        </div>
        @endif -->
        <form action="{{ route('submit.form') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your name">
                @error('name')
                <span style="color:red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone_number" placeholder="Enter your phone number">
                @error('phone_number')
                <span style="color:red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email">
                @error('email')
                <span style="color:red">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Submit</button>

        </form>

    </div>