<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ url("css/bootstrap-theme.min.css") }}">
    </head>
    <body>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Laravel to JavaScript</h1>  
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users">
                            <td>@{{ user.name }}</td>
                            <td>@{{ user.email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        @include("template.components.jsMiddleware")
    </body>
</html>
