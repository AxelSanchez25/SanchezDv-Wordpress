<?php wp_footer(); ?>

<footer class="footer">
    <div class="conte-footer">

    </div>

</footer>
<script>
     //nav 
    //Axel Sanchez
    //barra de navegacion 
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navBar');
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
</body>

</html>