<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Safarnama</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}"
                                role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif
                        <div class="card card-default">
                            <div class="card-header">
                                Safarnama Payment Page
                            </div>
                            <div class="card-body text-center">
                                <form action="{{ route('payment-paid') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="book_id" value="@php echo $data['book_id']; @endphp">
                                    <input type="hidden" name="amount" value="@php echo $data['amount']; @endphp">
                                    <input type="hidden" name="email" value="@php echo $data['email']; @endphp">
                                    <input type="hidden" name="phone" value="@php echo $data['phone']; @endphp">
                                    <input type="hidden" name="user_id" value="@php echo $data['user_id']; @endphp">
                                    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZORPAY_KEY') }}" data-amount="@php echo ((int)$data['amount']*100); @endphp" data-currency="INR" data-buttontext="Pay @php echo $data['amount']; @endphp INR" data-name="Safarnama" data-description="Dream Travel And Repeat"  data-prefill.name="Safarnama" data-prefill.contact="@php echo $data['phone']; @endphp" data-prefill.email="@php echo $data['email']; @endphp" data-theme.color="#F37254">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<script>
</script>
</html>
