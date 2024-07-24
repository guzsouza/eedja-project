@props([
    'title'
])

<div class="login-container d-flex justify-content-center align-items-center">
    <div class="col-sm-4 card card-container">
        <div class="d-flex align-items-center">
            <img src="/img/logo-eedja.svg" alt="" style="width: 50px">
        </div>
        <div class="mt-3">
            <h4><strong>{{ $title }}</strong></h4>
            {{ $slot }}
        </div>
        </div>
    </div>
</div>

<style>
    .login-container{
        background-image: linear-gradient(white, #ececec);
        height: 90vh;
    }

    .card-container{
        min-width: 25rem;
        background-color: white;
        padding: 3% 5%;
        box-shadow: 0px 5px 15px 2px rgba(0, 0, 0, 0.15);
    }

    .form-group{
        padding: 10px;
    }

    .ionic{
        display: flex;
        align-items: center;
        font-size: 1.2rem;
        color: #666F7B;
    }

    a{
        text-decoration: none;
        list-style: none;
    }
</style>