<style>
.footer {
  background-color: #fff;
  color: #333;
  padding: 20px 10px 0 0;
  font-family: Arial, sans-serif;
  text-align: center;
}

.footer__container {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer__section {
  margin-bottom: 20px;
}

.footer__section h4 {
  font-size: 18px;
  margin-bottom: 15px;
  color: #0693e3;
}

.footer__socials a {
  color: #333;
  font-size: 24px;
  margin: 0 15px;
  transition: color 0.3s;
}

.footer__socials a:hover {
  color: #0693e3;
}

.footer__section p {
  font-size: 14px;
  margin: 8px 0;
}

.footer__bottom {
  text-align: center;
  padding: 20px 0;
  background-color: #fff;
  border-top: 1px solid #444;
}

.footer__bottom p {
  font-size: 14px;
  margin: 0;
}

/* Responsiveness for mobile devices */
@media (max-width: 768px) {
  .footer__container {
    flex-direction: column;
  }

  .footer__section {
    text-align: center;
  }

  .footer__socials {
    justify-content: center;
  }
}
</style>

<footer class="footer">
         <div class="footer__container">
            <div class="footer__section">
               <h4>Follow Us</h4>
               <div class="footer__socials">
                  <a href="https://www.instagram.com" target="_blank"><i class="ri-instagram-line"></i></a>
                  <a href="https://www.facebook.com" target="_blank"><i class="ri-facebook-circle-line"></i></a>
                  <a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-line"></i></a>
                  <a href="https://www.youtube.com" target="_blank"><i class="ri-youtube-line"></i></a>
               </div>
            </div>
   
            <div class="footer__section">
               <h4>Contact Us</h4>
               <a href="https://www.google.com/maps/place/Jalan+Yulius+Usman+No.+62,+Malang,+Indonesia"><i class="ri-map-pin-line"></i> Jalan Yulius Usman No. 62, Malang, Indonesia</a>
               <p><i class="ri-phone-line"></i> +62 341-369003</p>
               <a href="mailto:info@stikespantiwaluya.ac.id"><i class="ri-mail-line"></i> info@stikespantiwaluya.ac.id</a>
            </div>
         </div>
   
         <div class="footer__bottom">
            <p>Copyrigth &copy; 2024 Stikes Panti Waluya Malang .</p>
         </div>
</footer>