<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<style>
    .contact-form-box {
        padding: 50px 30px;
        background-color: transparent;
        border: 1px solid #e5e5e5;
        display: flex;
        justify-content: center;
        height: 100%;
        flex-direction: column;
    }

    .contact-form-field label {
        font-size: 16px;
        color: #acadb7;
        margin-bottom: 10px;
    }

    .contact-form-field input,
    .contact-form-field select {
        width: 100%;
        padding: 15px 15px;
        background-color: var(--white);
        border: 1px solid #ebebeb;
        color: black;
        font-weight: 300;
    }

    .contact-form-field textarea {
        width: 100%;
        padding: 15px 15px;
        background-color: var(--white);
        border: 1px solid #acadb7;
        color: #acadb7;
        font-weight: 300;
    }

    .contact-form-field {
        margin-bottom: 30px;
    }

    .contact-form-field .dropdown {
        width: 100%;
        padding: 15px 15px;
        background-color: var(--white);
        border: 1px solid #acadb7;
        color: #acadb7;
        font-weight: 300;
        margin-bottom: 30px;
    }

    .contact-form-btn input {
        width: 100%;
        padding: 15px 15px;
        background-color: var(--greenish);
        border: none;
        color: var(--white);
        font-weight: 600;
    }

    .contact-form-btn button {
        width: 100%;
        padding: 15px 15px;
        background-color: var(--greenish);
        border: none;
        color: var(--white);
        font-weight: 600;
    }

    .contact-form-fields {
        display: flex;
        margin: 0 -15px;
    }

    .contact-form-fields>div {
        padding: 0 15px;
        width: 50%;
    }

    .contact-form-btn {
        background: darkseagreen;
        color: white;
    }
</style>

<body>
    <section class="contact-sec p-50">
        <div class="container">


            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="contact-form-box">
                        <div class="contact-content mb-30">
                            <h2 class="primary-hd mb-10 text-center">Delete My Account</h2>
                            <hr>
                        </div>

                        <form id="deleteform" method="POST">
                            @csrf
                            <input type="hidden" name="id">

                            <div class="contact-form-field">
                                <label for="subject">EMAIL</label>
                                <input id="email" name="email" type="email" placeholder="Email">

                            </div>
                            <div class="contact-form-field">
                                <label for="subject">PASSWORD</label>
                                <input id="password" name="password" type="password" placeholder="Password">

                            </div>

                            <div class="contact-form-btn">
                                {{-- <input type="submit" value="Send Your Message"> --}}
                                <button type="submit">Delete My Account</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
        <div id="modal" class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ route('deleteaccount') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="" name="email" id="email-modal">
                                    @if ($errors->any())
                                        {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
                                    @endif
                                    <div class="contact-form-field">

                                        <label for="subject">Please comfim by typing 'delete' for deleting
                                            account</label>
                                        <input id="deleteconfirm" name="deletetext" name="text" type="text"
                                            placeholder="">

                                    </div>

                                    <div class="contact-form-btn">
                                        <button id="modal-btn">Confirm</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $('#deleteform').submit(function(e) {
            e.preventDefault()
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('password-verify') }}",
                data: {
                    'email': $('#email').val(),
                    'password': $('#password').val()

                },
                success: function(response) {
                    if (response.status) {
                        toastr.success(response.msg)
                        $('#email-modal').val($('#email').val());
                        $('#modal').modal('show');


                    } else {
                        toastr.error(response.msg)
                        for (let index = 0; index < response.input.length; index++) {
                            $(`#${response.input[index]}`).val('')

                        }


                    }
                }
            })



        })
        @if (session('success'))
            toastr.success('{{ session('success') }}')
        @endif
        @if (session('error'))
            toastr.error('{{ session('error') }}')
        @endif
    </script>

</body>

</html>
