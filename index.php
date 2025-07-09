<?php include('header.php'); ?>

    <div class="container">
      <section class="welcome">
        <div class="welcome-container">
          <div class="welcome-text">
            <h2>Üdvözöljük gyülekezetünk honlapján!</h2>
            <p>
              Közösségünk nevét úgy lehetne mondani, hogy az "Ige Gyülekezete".
              Ez nem azt jelenti, hogy tökéletesen ismerjük az Igét vagy más nem
              érdekelne bennünket, de valamit igen. Azt, hogy Jézus Krisztus, a
              mi Urunk az Ige által tanít, vezeti életünket. S ha szava élővé,
              üzenetté válik, akkor szabadulást, örömöt és békességet kapunk.
            </p>
            <p>
              Kívánjuk, hogy nyitott szívvel olvassa az Igét, engedjen
              üzenetének; akkor boldog ember lesz. Várjuk közösségünkbe.
            </p>
          </div>
          <div class="pastor-profile">
            <img src="images/deak_laszlo.jpg" alt="Deák László lelkipásztor" />
            <p><em>Deák László lelkipásztor</em></p>
          </div>
        </div>
      </section>
      <div class="live-stream">
        <h3>Istentiszteletek élő közvetítése</h3>
        <p>
          Az istentiszteletek élő közvetítéseinek linkjeit gyülekezetünk
          levelezőlistájára küldjük meg. A felvételek utólag megtekinthetők itt:
        </p>
        <div class="stream-links">
          <a
            href="https://www.youtube.com/playlist?list=PLMe6cEuU3-9QnlzEYfpbTmsJzve5dS7iC"
            class="btn"
            target="_blank"
            >YouTube</a
          >
          <a
            href="https://hu-hu.facebook.com/pages/Kispesti-Evang%C3%A9likus-Gy%C3%BClekezet/151717521552885"
            class="btn"
            target="_blank"
            >Facebook</a
          >
        </div>
      </div>

      <div class="grid">
        <div class="card">
          <div class="card-header">
            <i class="fa-solid fa-phone"></i>
            <h2>Elérhetőség</h2>
          </div>
          <p>
            <i class="fa fa-phone"></i><strong> Telefon:</strong> 06-20-366-5790
          </p>
          <p>
            <i class="fa fa-envelope"></i
            ><strong> Email:</strong> lelkeszlaci@gmail.com
          </p>
          <p>
            <i class="fa fa-location-dot"></i><strong> Cím:</strong> 1196
            Budapest, Templom tér 1.
          </p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10791.705622973597!2d19.142294!3d47.452374!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741c2e89ada8e05%3A0x679fcf4c4941012d!2sEvang%C3%A9likus+templom!5e0!3m2!1shu!2hu!4v1416832687576"
            width="100%"
            height="300"
            style="border: 0; max-width: 600px"
            allowfullscreen
            loading="lazy"
          ></iframe>
          <p><strong>Bankszámlaszám:</strong> 11719001-20251631</p>
          <div class="donation">
            <a href="https://perselypenz.lutheran.hu/" target="_blank">
              <img src="images/epersely.png" alt="E-persely" />
            </a>
            <button class="btn" onclick="showQR('perselypenz.lutheran.hu')">
              QR kód
            </button>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <i class="fa-solid fa-calendar"></i>
            <h2>2025. július</h2>
            <button class="btn calendar-nav-btn" onclick="goToPrevMonth()">
              &lt;&lt;
            </button>
            <button class="btn calendar-nav-btn" onclick="goToNextMonth()">
              &gt;&gt;
            </button>
          </div>
          <div class="calendar-events">
            <div class="event-day">
              <h4>július 3. csütörtök</h4>
              <div class="event">
                <span class="event-time">16:45:</span> Imaóra
              </div>
              <div class="event">
                <span class="event-time">17:30:</span> Bibliaóra
              </div>
            </div>
            <div class="event-day">
              <h4>július 6. vasárnap</h4>
              <div class="event">
                <span class="event-time">08:00:</span> Istentisztelet
                Wekerletelepen, ref. templom, úrvacsora
              </div>
              <div class="event">
                <span class="event-time">10:00:</span> Istentisztelet, úrvacsora
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="grid">
        <div class="card">
          <div class="card-header">
            <i class="fa-solid fa-people-group"></i>
            <h2>Rendszeres alkalmak</h2>
          </div>
          <ul>
            <li><a href="istentisztelet.php">Istentisztelet</a></li>
            <li><a href="gyermekbibliakor.php">Gyermekbibliakör</a></li>
            <li><a href="ifi.php">Ifi</a></li>
            <li><a href="mirtusznoikor.php">Mirtusz női kör</a></li>
            <li><a href="konfirmacio.php">Konfirmációs órák</a></li>
            <li><a href="imakor.php">Imakör</a></li>
            <li><a href="bibliaora.php">Bibliaóra</a></li>
          </ul>
          <a
            href="https://www.youtube.com/playlist?list=PLMe6cEuU3-9QnlzEYfpbTmsJzve5dS7iC"
            class="btn"
            target="_blank"
            >Tovább <i class="fas fa-arrow-right"></i
          ></a>
        </div>

        <div class="card">
          <div class="card-header">
            <i class="fa-solid fa-church"></i>
            <h2>Kazuális szolgálatok</h2>
          </div>
          <ul>
            <li><a href="temetes.php">Temetési információk</a></li>
            <li><a href="esketes.php">Esketési információk</a></li>
            <li><a href="keresztelo.php">Keresztelési tudnivalók</a></li>
          </ul>
        </div>

        <div class="card">
          <div class="card-header">
            <i class="fa-solid fa-info"></i>
            <h2>Egyéb információk</h2>
          </div>
          <ul>
            <li><a href="videok.php">Videók</a></li>
            <li><a href="igehirdetesek.php">Igehirdetések (hangtár)</a></li>
            <li><a href="hitvallas.php">Hitvallás</a></li>
            <li><a href="galeria.php">Galéria</a></li>
            <li><a href="tortenet.php">Gyülekezetünk története</a></li>
            <li><a href="kapcsolodo.php">Kapcsolódó oldalak</a></li>
          </ul>
        </div>
      </div>
    </div>

<?php include('footer.php'); ?>