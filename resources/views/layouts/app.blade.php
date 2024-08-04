<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Gestion de Stock</title>

</head>

<body>

    <section id="sidebar" class="hide">
        <a href="#" class="brand">
            <i class='bx bx-store'></i>
            <span class="text">Gestion de Stock</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Acceuil</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Fournitures</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Agent</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Division</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <a href="#" class="brand">
                <i class='bx bx-store'></i>
                <span class="text">Transaction</span>
            </a>
            <li>
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Entré</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Sortie</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Entré et Sortie</span>
                </a>
            </li>
        </ul>
    </section>

    <section id="content">
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">SRSP</a>
            <form>
                <div class="form-input">
                    <input type="search" placeholder="rechercher par nom...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>

        </nav>
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>

                </div>
                <div class="right-buttons">
                    <a href="#" class="btn-download custom-btn">
                        <i class='bx bxs-cloud-download'></i>
                        <span class="text">Download PDF</span>
                    </a>
                    <a href="#" class="btn-download custom-btn">
                        <i class='bx bxs-cloud-download'></i>
                        <span class="text">Download EXCEL</span>
                    </a>
                </div>
            </div>
            <ul class="box-info special">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>New order</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>New order</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>New order</p>
                    </span>
                </li>

            </ul>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Demandes récents</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Fournitures</th>
                                <th>Date Order</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/Stylo.PNG">
                                    <p>stylo</p>
                                </td>
                                <td>24-10-2023</td>
                                <td><span class="staus completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/Stylo.PNG">
                                    <p>stylo</p>
                                </td>
                                <td>24-10-2023</td>
                                <td><span class="staus completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/Stylo.PNG">
                                    <p>stylo</p>
                                </td>
                                <td>24-10-2023</td>
                                <td><span class="staus completed">Completed</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Demandes récents</h3>
                        <i class='bx bx-plus'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <ul class="todo-list">
                        <li>
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li>
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li>
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </section>

    <script src="{{ asset('script.js') }}"></script>
</body>

</html>
