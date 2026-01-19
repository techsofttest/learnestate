@extends('layouts.app')

@section('head_extras')






<style>
    .success-container {
            max-width: 700px;
            width: 100%;
        }

        .success-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-header {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            padding: 50px 40px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .success-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            animation: scaleIn 0.5s ease-out 0.3s backwards;
            position: relative;
            z-index: 1;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }

        .success-icon i {
            font-size: 3rem;
            color: #22c55e;
        }

        .success-header h1 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .success-header p {
            font-size: 1.1rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        .success-body {
            padding: 40px;
        }

        .order-id {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
            border-left: 4px solid #667eea;
        }

        .order-id label {
            font-size: 0.85rem;
            color: #6c757d;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: block;
            margin-bottom: 5px;
        }

        .order-id span {
            font-size: 1.2rem;
            font-weight: 700;
            color: #333;
            font-family: 'Courier New', monospace;
        }

        .summary-section {
            margin-bottom: 30px;
        }

        .summary-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .summary-title i {
            color: #667eea;
        }

        .course-summary {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            gap: 20px;
            align-items: center;
            margin-bottom: 20px;
            transition: all 0.3s;
        }

        .course-summary:hover {
            border-color: #667eea;
            box-shadow: 0 4px 12px rgba(102,126,234,0.1);
        }

        .course-thumbnail {
            width: 120px;
            height: 80px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .course-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .course-info {
            flex: 1;
        }

        .course-info h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
        }

        .course-meta {
            display: flex;
            gap: 15px;
            font-size: 0.85rem;
            color: #6c757d;
        }

        .course-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .price-breakdown {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #dee2e6;
        }

        .price-row:last-child {
            border-bottom: none;
            padding-top: 20px;
            margin-top: 10px;
            border-top: 2px solid #dee2e6;
        }

        .price-row label {
            font-size: 0.95rem;
            color: #6c757d;
            font-weight: 500;
        }

        .price-row.total label {
            font-size: 1.2rem;
            font-weight: 700;
            color: #333;
        }

        .price-row span {
            font-size: 1rem;
            font-weight: 600;
            color: #333;
        }

        .price-row .discount {
            color: #22c55e;
        }

        .price-row.total span {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .payment-method {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            margin-top: 15px;
        }

        .payment-method i {
            font-size: 1.5rem;
            color: #667eea;
        }

        .payment-method .info {
            flex: 1;
        }

        .payment-method .info label {
            font-size: 0.8rem;
            color: #6c757d;
            display: block;
            margin-bottom: 3px;
        }

        .payment-method .info span {
            font-size: 0.95rem;
            font-weight: 600;
            color: #333;
        }

        .next-steps {
            background: linear-gradient(135deg, #eff6ff 0%, #f3e8ff 100%);
            border-radius: 12px;
            padding: 25px;
            margin-top: 30px;
        }

        .next-steps h5 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .next-steps ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .next-steps li {
            padding: 10px 0;
            color: #555;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .next-steps li i {
            color: #667eea;
            font-size: 1.1rem;
        }

        .action-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 30px;
        }

        .btn-custom {
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(102,126,234,0.4);
        }

        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102,126,234,0.5);
        }

        .btn-secondary-custom {
            background: white;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-secondary-custom:hover {
            background: #667eea;
            color: white;
        }

        .email-notification {
            text-align: center;
            padding: 20px;
            background: #fff7ed;
            border-radius: 10px;
            margin-top: 20px;
            border: 1px solid #fed7aa;
        }

        .email-notification i {
            font-size: 1.5rem;
            color: #f59e0b;
            margin-bottom: 10px;
        }

        .email-notification p {
            margin: 0;
            color: #92400e;
            font-size: 0.9rem;
        }

        @media (max-width: 576px) {
            .success-header {
                padding: 40px 20px;
            }

            .success-body {
                padding: 20px;
            }

            .course-summary {
                flex-direction: column;
                text-align: center;
            }

            .course-thumbnail {
                width: 100%;
                height: 150px;
            }

            .action-buttons {
                grid-template-columns: 1fr;
            }
        }
</style>

@endsection

@section('content')




 <div class="success-container">
        <div class="success-card">
            <!-- Success Header -->
            <div class="success-header">
                <div class="success-icon">
                    <i class="fas fa-check"></i>
                </div>
                <h1>Payment Successful!</h1>
                <p>Your purchase has been completed successfully</p>
            </div>

            <!-- Success Body -->
            <div class="success-body">
                <!-- Order ID -->
                <div class="order-id">
                    <label>Order ID</label>
                    <span>#ORD-2026-78945</span>
                </div>

                <!-- Course Summary -->
                <div class="summary-section">
                    <h3 class="summary-title">
                        <i class="fas fa-shopping-bag"></i>
                        Order Summary
                    </h3>
                    <div class="course-summary">
                        <div class="course-thumbnail">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=200&h=120&fit=crop" alt="Course">
                        </div>
                        <div class="course-info">
                            <h4>Complete Web Development Bootcamp 2026</h4>
                            <div class="course-meta">
                                <span><i class="fas fa-book"></i> 12 Modules</span>
                                <span><i class="fas fa-play-circle"></i> 156 Lessons</span>
                                <span><i class="fas fa-clock"></i> 42h</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Price Breakdown -->
                <div class="summary-section">
                    <h3 class="summary-title">
                        <i class="fas fa-receipt"></i>
                        Payment Details
                    </h3>
                    <div class="price-breakdown">
                        <div class="price-row">
                            <label>Course Price</label>
                            <span>$199.00</span>
                        </div>
                        <div class="price-row">
                            <label>Discount (75% OFF)</label>
                            <span class="discount">-$150.00</span>
                        </div>
                        <div class="price-row">
                            <label>Tax</label>
                            <span>$0.00</span>
                        </div>
                        <div class="price-row total">
                            <label>Total Paid</label>
                            <span>$49.00</span>
                        </div>

                        <div class="payment-method">
                            <i class="fas fa-credit-card"></i>
                            <div class="info">
                                <label>Payment Method</label>
                                <span>Visa ending in 4242</span>
                            </div>
                            <i class="fas fa-check-circle" style="color: #22c55e;"></i>
                        </div>
                    </div>
                </div>

                <!-- Next Steps -->
                <div class="next-steps">
                    <h5>
                        <i class="fas fa-lightbulb"></i>
                        What's Next?
                    </h5>
                    <ul>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>Receipt has been sent to your email</span>
                        </li>
                        <li>
                            <i class="fas fa-play-circle"></i>
                            <span>Start learning immediately from your dashboard</span>
                        </li>
                        <li>
                            <i class="fas fa-certificate"></i>
                            <span>Earn your certificate upon completion</span>
                        </li>
                        <li>
                            <i class="fas fa-infinity"></i>
                            <span>Enjoy lifetime access to course materials</span>
                        </li>
                    </ul>
                </div>

                <!-- Email Notification -->
                <div class="email-notification">
                    <i class="fas fa-inbox"></i>
                    <p><strong>Check your inbox!</strong> We've sent a confirmation email to <strong>student@email.com</strong> with your order details and access instructions.</p>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn-custom btn-primary-custom">
                        <i class="fas fa-play"></i>
                        Start Learning
                    </button>
                    <button class="btn-custom btn-secondary-custom">
                        <i class="fas fa-download"></i>
                        Download Receipt
                    </button>
                </div>
            </div>
        </div>
    </div>




@endsection