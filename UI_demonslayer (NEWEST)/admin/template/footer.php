<!-- Footer Section -->
<style>
    /* Footer CSS */
.footer__container {
  background-color: #FE0000;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: auto;
  align-items: center;
}

#footer__logo {
  color: #fff;
  display: flex;
  align-items: center;
  cursor: pointer;
}

.social__media {
  max-width: 1000px;
  width: 100%;
}

.social__media--wrap {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 45%;
  max-width: 1000px;
  margin: 0px auto 0 auto;
}

.website__rights {
  width: max-content;
  color: #fff;
  font-size: 1.5rem;
}

@media screen and (max-width: 820px) {
  #footer__logo {
    margin-bottom: 2rem;
  }

  .website__rights {
    margin-bottom: 2rem;
  }

  .social__media--wrap {
    flex-direction: column;
  }
}

</style>
<footer>
<div class="footer__container">
      <section class="social__media">
        <div class="social__media--wrap">
          <div id="footer__logo">
            <img src="../img/register_login/logo.png" alt="Demon Slayer" width="57" height="53"/>
          </div>
          <p class="website__rights">Copyright @2023 Demon Ward</p>
        </div>
      </section>
</div>
</div>
</footer>
    </body>
</html>