<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Cute+Font&family=Pacifico&display=swap" rel="stylesheet">
    <title>Excel to Sql</title>
</head>
<body>
    <img class="excel-logo" src="{{ asset('images/excel-logo.png') }}" alt="" srcset="">
    <img class="sql-logo" src="{{ asset('images/sql-logo.png') }}" alt="" srcset="">
    <div class="outer-box">
        <h1>Excel to Sql Query Converter</h1>
        <div class="inner-box">
            <div class="form-box">
                <div class="choose-box">
                    <a href="/"><button>Create</button></a>
                    <button class="button-select">Insert</button>
                </div>
                <p>Upload your excel file here</p>
                <form  action="{{ route('insert') }}" method="post" enctype="multipart/form-data" id="insert-form">
                    @csrf
                    <input type="file" name="file" id="">
                    <input type="submit" value="Generate Insert Query">
                </form>
                @error('file')
                    <div class="errorMsg">{{ $message }}</div>
                @enderror
                @error('errorMsg')
                    <div class="errorMsg">{{ $message }}</div>
                @enderror
            </div>
            <div class="download">
                @if(file_exists(storage_path() . '\app\query.sql'))
                <div class="after-download">
                    <p>Your file is ready to download</p>
                    <a href="{{ route('download') }}"><img src="{{ asset('images/download-logo.webp') }}" alt="" srcset=""></a>
                </div>
                @else
                    <img src="{{ asset('images/load.webp') }}" alt="" srcset="">
                @endif
            </div>
        </div>
    </div>
    <p class="copyright">Copyright © 2024 Suman Debnath</p>
</body>
</html>