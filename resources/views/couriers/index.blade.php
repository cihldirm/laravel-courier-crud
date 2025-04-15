<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <div style="width: fit-content;">
        <div class="search-field" style="float: left;">
            <span style="font-size: 18px;"><b>Search By</b></span>
            <br>
            <span>Name : {{$search}}</span>
            <br>
            <span>Filter Level : {{$level}}</span>
            <br>
            <br>
            <form name="" action="/couriers?sort_by={{$sort_by}}" method="get">
                <!-- {{ csrf_field() }} -->
                <span>Sort By : </span>
                <select name="sort_by" id="sort_by" onchange="this.form.submit()">
                    @if ($sort_by === "name")
                        <option value="name" selected>Nama</option>
                        <option value="registered_date">Tanggal Didaftarkan ( yyyy-mm-dd )</option>
                    @else
                        <option value="name">Nama</option>
                        <option value="registered_date" selected>Tanggal Didaftarkan ( yyyy-mm-dd )</option>
                    @endif
                </select>
            </form>
            <br>
        </div>
        <div style="float: right;">
            <input type="button" onclick="location.href='/couriers-crud';" value="Couriers CRUD" />
        </div>
        <br>
        <br>
        <table border=1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Level</th>
                    <th>Registered Date ( yyyy-mm-dd )</th>
                </tr>
            </thead>
            <tbody>
                @foreach($couriers as $courier)
                    <tr>
                        <td>{{$courier->id}}</td>
                        <td>{{$courier->name}}</td>
                        <td>{{$courier->level}}</td>
                        <td>{{$courier->registered_date}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top: 1rem; float: right;">
            <a href="{{$couriers->previousPageUrl()}}">
                Prev
            </a>
            @for($i=1;$i<=$couriers->lastPage();$i++)
                <a href="{{$couriers->url($i)}}">{{$i}}</a>
            @endfor
            <a href="{{$couriers->nextPageUrl()}}">
                Next
            </a>
        </div>
    </div>
</body>
</html>
