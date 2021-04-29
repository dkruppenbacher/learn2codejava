<footer>       
    <button class="btn-toggle">Toggle Dark Mode</button>
    <p class="footer"> @2021 GearMonke Inc.&emsp;&emsp;<a href="mailto:info@learn2codejava.com">Contact: info@learn2codejava.com</a>&emsp;&emsp;<a href="#">Donate</a></p>
</footer>
	<script>
  const btn = document.querySelector(".btn-toggle");
  const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
  
  btn.addEventListener("click", function() {
    if (prefersDarkScheme.matches) {
      document.body.classList.toggle("light-mode");
      var theme = document.body.classList.contains("light-mode") ? "light" : "dark";
    } else {
      document.body.classList.toggle("dark-mode");
      var theme = document.body.classList.contains("dark-mode") ? "dark" : "light";
    }
    document.cookie = "theme=" + theme+"; path=/";
  });
</script>
 </body>
 </html>