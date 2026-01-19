<style>

.sidebar {
            position: relative;
            top: 0;
            left: 0;
            height: 100%;
          
            padding-top: 20px;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .sidebar-header {
            padding: 10px;
            text-align: center;
            color: white;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 5px;
        }

        .sidebar-header h4 {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .sidebar-header p {
            font-size: 0.85rem;
            opacity: 0.9;
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
        }

        .sidebar-nav li {
            margin: 5px 0;
        }

        .sidebar-nav a, .sidebar-nav form {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            color: black;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .sidebar-nav a:hover, .sidebar-nav button:hover {
            background-color: rgba(255,255,255,0.1);
            color: black;
            padding-left: 30px;
        }

        .sidebar-nav a.active, .sidebar-nav button.active {
            background-color: rgb(228 228 228 / 44%);
            color: var(--theme-color2);
            border-left: 10px solid var(--theme-color2);
        }

        .sidebar-nav a i, .sidebar-nav button i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
        }

        .main-content {
            padding: 30px;
            min-height: 100vh;
        }

        .top-bar {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .top-bar h2 {
            color: #333;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .top-bar p {
            color: #6c757d;
            margin: 0;
            font-size: 0.9rem;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
        }

        .stat-card.purple::before {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
        }

        .stat-card.green::before {
            background: linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
        }

        .stat-card.orange::before {
            background: linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            margin-bottom: 15px;
        }

        .stat-card.purple .stat-icon {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .stat-card.green .stat-icon {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }

        .stat-card.orange .stat-icon {
            background: linear-gradient(135deg, #ee0979 0%, #ff6a00 100%);
        }

        .stat-label {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }

        .stat-change {
            font-size: 0.85rem;
            color: #28a745;
        }

        .stat-change i {
            margin-right: 3px;
        }

        .recent-activity {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .recent-activity h5 {
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }

        .activity-item {
            padding: 15px;
            border-left: 3px solid #667eea;
            margin-bottom: 15px;
            background: #f8f9fa;
            border-radius: 5px;
        }

        .activity-item h6 {
            font-size: 0.95rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .activity-item p {
            font-size: 0.85rem;
            color: #6c757d;
            margin: 0;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
            }

            .sidebar-header h4,
            .sidebar-header p,
            .sidebar-nav a span {
                display: block;
            }

            .sidebar-nav a, .sidebar-nav button, .sidebar-nav form{
                justify-content: start;
                padding: 15px;
            }


            .module-info {
                font-size: 10px;
            }
            

            .sidebar-nav a i {
                margin: 0;
            }

            .main-content {
                margin-left: 0;
                padding: 15px;
            }

            
            .module-title {
                font-size: 12px;
            }

            .stats-container {
                grid-template-columns: 1fr;
            }
    }
    
</style>


<div class="col-12 col-lg-3 p-0">

<div class="sidebar">
        <div class="sidebar-header">

            <h4>Student Portal</h4>

        </div>
        <ul class="sidebar-nav">

                <li>
                    <a href="{{ url('student/dashboard') }}"
                    class="{{ request()->is('student/dashboard') ? 'active' : '' }}">
                        <i class="fas fa-th-large"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('student/my-courses') }}"
                    class="{{ request()->is('student/my-courses') ? 'active' : '' }}">
                        <i class="fas fa-book-open"></i>
                        <span>My Courses</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('student/payments') }}"
                    class="{{ request()->is('student/payments') ? 'active' : '' }}">
                        <i class="fas fa-credit-card"></i>
                        <span>Payment History</span>
                    </a>

                </li>

            <li>

                <form method="POST" action="{{ route('student.logout') }}">
                    @csrf
                    <button type="submit" class="btn p-0 text-start w-100">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>

            </li>
            
        </ul>
    </div>

</div>