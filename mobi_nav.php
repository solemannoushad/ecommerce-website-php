
        <?php
        
            session_start();

        ?>

        <nav id="navbar">

            <a href="index.php" id="brand-logo">
                Mobi Men
            </a>
            <ul id="nav-ul">
                <div class="wh search-no">
                    <i class="fas fa-search nav-icons" class="search-click"></i>
                    <span class="search-span"></span>
                    <form action="">
                        <div id="navSearch" class="shas1">
                            <input type="input" name="navSearch" id="navSearchBar" autocomplete="off" placeholder="What are you Looking for?">
                            <!-- <button type="submit"><i class="fas fa-search" id="searchBtn"></i></button> -->
                        </div>
                    </form>
                </div>
                <div class="wh"><a href="index.php" class="anker-nav"><i class="fas fa-home nav-icons"></i></a></div>
                <div class="wh"><a href="https://web.facebook.com/the.Mobi.men12/" target="_blank" class="anker-nav"><i class="fab fa-facebook-square nav-icons"></i></a></div>
                <div class="wh"><a href="https://www.instagram.com/the.mobi.men/" target="_blank" class="anker-nav"><i class="fab fa-instagram nav-icons"></i></a></div>
                <div class="wh phone-main">
                    <i class="fas fa-phone-alt nav-icons"></i>
                    <div class="phone-no"><p>03104438584</p></div>
                </div>
                <div class="whats-main wh">
                    <i class="fab fa-whatsapp nav-icons"></i>
                    <div class="whats-no"><p>03244200387</p></div>
                </div>
                <div class="wh">
                    <i class="fas fa-shopping-cart nav-icons" id="cartMain" onclick="cartVis()"></i>
                    <div class="cart-main cartHide" id="cartMain1">
                        <div class="cart-det" id="cart-table">
                            <table>
                                <thead>
                                    <tr class="table-head">
                                        <td>Item Name</td>
                                        <td>Qty</td>
                                        <td>Price</td>
                                        <td>Remove</td>
                                    </tr>
                                </thead>
                                <tbody id="cartData">  
                                                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </ul>

        </nav>
