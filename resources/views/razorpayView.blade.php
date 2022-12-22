<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hone ST Solutions</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .gv{
            display: grid;
            grid-template-rows: repeat(2,1fr);
            grid-template-columns: auto auto;
        }
        .item2{
            margin-left: 20%;
        }
        @media(min-width:300px) and(max-width:700){
            .gv{
                grid-template-columns:1fr;
                grid-template-rows:auto;
            }
            .item1{
                grid-column-start: span 1;
            }
            .item2{
                grid-column-start: span 1;
            }
        }
    </style>
</head>
<body>
    
  <nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.honestsol.com/">
      <img src="{{ asset('img/Hone-ST-Logo.png') }}" alt="Logo" width="80" height="40" class="d-inline-block align-text-top">
       Hone ST Solutions
    </a>
    <!-- <a class="nav-link" onclick="window.location.href='https://www.honestsol.com/'" >Home</a> -->
    <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
  </div>
</nav>

    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
  
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
  
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif






                        <div class="card card-default">
                          <center>  <div class="card-header">
                            Buy Book Now
                            </div>
                            </center>
                          
                            <div class="card-body text-center">
                                <form action="{{ route('razorpay.payment.store') }}" method="POST" >
                                    @csrf
                                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                                            data-key="{{ env('RAZORPAY_KEY') }}"
                                            data-amount="100"
                                            data-buttontext="Pay 1 INR"
                                            data-name="Hone ST Solutions"
                                            data-description="Rozerpay"
                                            data-image="https://drive.google.com/uc?export=view&id=10NeynXgw0EWHZP_-IjOl9LfRv8o0XRgp"
                                            data-prefill.name="name"
                                            data-prefill.email="email"
                                            data-theme.color="#ff7529">
                                    </script>
                                </form>

                                
                            </div>
                        </div>
  
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <div class="container m-5">
        <div class="gv">
        <div class="card item1" style="width: 18rem;">
  <img src="{{ asset('img/book_cover.png') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BhagavadGita Kahani Swaroop</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's cont</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="container item2 m-5" style="margin-left:20%;">
    <h2>About author</h2>
    <p>प्रसून कुंडू का जन्म ग्वालियर में हुआ था, और उन्होंने जीवाजी विश्वविद्यालय, ग्वालियर से स्नातक और एमबीए पूरा किया।
उनके पास सेल्स और मार्केटिंग में २७ से अधिक वर्षों का समृद्ध अनुभव है, उन्होंने नेस्ले इंडिया लिमिटेड, रिलायंस रिटेल, आइडिया सेल्युलर लिमिटेड और मैककॉर्मिक जैसे प्रमुख संगठनों के साथ काम किया है।
उनकी पहली पुस्तक 'द कॉरपोरेट भगवद्‍गीता - डिस्कवर द अर्जुन इन यू', लोगों के लिए आत्मसात करने, अनुकरण करने और जीवन में सकारात्मक बदलाव लाने के लिए उपलब्ध कराने का एक प्रयास है।
वह Hone ST Solutions के संस्थापक हैं, जो कॉर्पोरेट प्रशिक्षण (भगवद्‍गीता के माध्यम से), बिजनेस कंसल्टेंसी, भगवद्‍गीता CHANTING TUTORIALS, लीडरशिप रिक्रूटमेंट और डिजिटल मार्केटिंग की सेवाएं प्रदान करते हैं।
वह अहमदाबाद में रहते हैं, और संध्या (Hone ST Solutions की सह संस्थापक) से शादी की है। उनके दो बेटे हैं, प्रत्यूष (बड़ा) न्यूयॉर्क में सिटी बैंक में कार्यरत है, जबकि प्रतीक (छोटा) डीपीएस, अहमदाबाद में पढ़ रहा है।
ये किताब हर घर भगवद्‍गीता पढ़ने का उनका एक छोटा सा प्रयास है!
</p>
        </div>
    </div>
</div>
</body>
</html>