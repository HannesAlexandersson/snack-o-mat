<?php
session_start();?>
<header>
<div class="navigation">
            <ul>
                <li class="list active">
                    <a href="index.php">
                        <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="filter-circle-outline"></ion-icon>
                    </span>
                        <span class="text">Filter</span>
                    </a>
                </li>
                <li class="list">
                    <a href="about.php">
                        <span class="icon">
                        <ion-icon name="help-circle-outline"></ion-icon>
                    </span>
                        <span class="text">About</span>
                    </a>
                </li>
                <li class="list">
                    <a href="shop.php">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="text">Shopp</span>
                    </a>
                </li>
                <li class="list">
                    <a href="cart.php">
                        <span class="icon">
                        <ion-icon name="basket-outline"></ion-icon>
                        </span>
                        <span class="text">cart</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
        <script>
            const list = document.querySelectorAll('.list');
            function setActiveLink(){
                list.forEach((item) =>
                item.classList.remove('active'));
                list.forEach((item) => {
                    if (window.location.href.includes(item.querySelector('a').getAttribute('href'))) {
                    item.classList.add('active');
                    }
                });                
            }
            list.forEach((item) =>
            item.addEventListener('click',setActiveLink));
            setActiveLink();
        </script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</header>