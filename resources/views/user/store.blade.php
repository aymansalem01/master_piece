@extends('user.layout.layout')
@section('content')
    <style>
        .hello {
            margin-top: 60px;
            min-height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .payment-box {
            background: #f1f0fe;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;

        }

        .btnn {
            background-color: #7a6ad8;
            color: #fff;
        }

        .login-container p {
            margin-top: 20px;
            font-size: 1rem;
        }

        .error {
            color: red;
        }
    </style>
    @if (session('message'))
        <h1>{{ session('message') }}</h1>
    @endif
    <div class="hello">
        <div class="payment-box">
            <h3 class="text-center mb-4">Choose Payment Method</h3>
            <div class="form-group">
                <label for="paymentMethod">Select a method:</label>
                <select id="paymentMethod" class="form-control">
                    <option value="" disabled selected>Select...</option>
                    <option value="visa">Visa</option>
                    <option value="coupon">Coupon</option>
                </select>
            </div>

            <form id="visaForm" style="display: none;" action="{{ route('payment_visa') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="paymentMethod">Select a class:</label>
                    <select name="class" class="form-control">
                        <option value="" disabled {{ old('class') ? '' : 'selected' }}>Select...</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}"
                                {{ old('class') == $class->id ? 'selected' : '' }}>
                                {{ $class->name }} --> {{ $class->price }}$
                            </option>
                        @endforeach
                    </select>
                    @error('class')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="paymentMethod">Do you need VR access:</label>
                    <select name="vr_access" class="form-control">
                        <option value="" disabled {{ old('vr_access') === null ? 'selected' : '' }}>Select...</option>
                        <option value="1" {{ old('vr_access') == '1' ? 'selected' : '' }}>yes --> add 20$ in price</option>
                        <option value="0" {{ old('vr_access') == '0' ? 'selected' : '' }}>no</option>
                    </select>
                    @error('vr_access')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="cardNumber">Card Number</label>
                    <input type="text" name="visa_no" class="form-control"
                        value="{{ old('visa_no', $visa_info->visa_no ?? '') }}" required>
                    @error('visa_no')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="expiry">Visa Name</label>
                    <input type="text" name="visa_name" class="form-control"
                        value="{{ old('visa_name', $visa_info->visa_name ?? '') }}" required>
                    @error('visa_name')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" name="visa_code" class="form-control"
                        value="{{ old('visa_code', $visa_info->visa_code ?? '') }}" required>
                    @error('visa_code')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div style="display:flex;justify-content:center">
                <button type="submit" class="btn btnn btn-block mt-3">Submit Visa</button>
            </div>
            </form>


            <!-- Coupon Form -->
            <form id="couponForm" style="display: none;" action="{{ route('payment_coupon') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="couponCode">Enter Coupon Code</label>
                    <input type="text" name="coupon" class="form-control" required>
                    @error('coupon')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div style="display:flex;justify-content:center">

                <button type="submit" class="btnn btn btn-block mt-3">Apply Coupon</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('paymentMethod').addEventListener('change', function() {
            const visaForm = document.getElementById('visaForm');
            const couponForm = document.getElementById('couponForm');
            visaForm.style.display = 'none';
            couponForm.style.display = 'none';

            if (this.value === 'visa') {
                visaForm.style.display = 'block';
            } else if (this.value === 'coupon') {
                couponForm.style.display = 'block';
            }
        });
    </script>
@endsection
