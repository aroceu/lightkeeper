<!-- Footer -->
<div id="footer">

<div class="footer-box">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?><?php endif; ?>
</div>

<div class="footer-box">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?><?php endif; ?>
</div>

<div class="footer-box">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : ?><?php endif; ?>
</div>

</div>

<div class="theme-switch-wrapper">
       <label class="theme-switch" for="checkbox">
    <input type="checkbox" id="checkbox" />
    <div class="slider round"></div>
  </label>
  </div>

</body>

<?php wp_footer(); ?>

<!-- Javascript -->
     
<script>

const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
  
    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
    else {        document.documentElement.setAttribute('data-theme', 'light');
          localStorage.setItem('theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

function toggleNavigation() {
    var element = document.getElementById("navigation");
    if (element.style.display == "block") {
        element.style.display = "none";
    } else {
        element.style.display = "block";
    }
}

function navigation_open() {
  document.getElementById("navigation").style.display = "block";
}

function navigation_close() {
  document.getElementById("navigation").style.display = "none";
}

</script>

</body>

</html>