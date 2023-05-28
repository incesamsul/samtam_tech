<footer class="p-5 mt-5 bg-second">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h4>SamTam Tech</h4>
                <p class="text-secondary"><small>
                        Samtam tech adalah jasa pembuatan website yang berlokasi di makassar. </small></p>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li><strong>Jasa web</strong></li>
                    <li class="text-secondary"><small>
                            <a href="">Website</a>
                        </small></li>
                    <li class="text-secondary"><small>
                            <a href="">Landing page</a>
                        </small></li>
                    <li class="text-secondary"><small>
                            <a href="">Mobile</a>
                        </small></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li><strong>Related</strong></li>
                    <li class="text-secondary"><small>
                            <a href="">sistem informasi</a>
                        </small></li>
                    <li class="text-secondary"><small>
                            <a href="">Pos</a>
                        </small></li>
                    <li class="text-secondary"><small>
                            <a href="">It </a>
                        </small></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li><strong>Contact</strong></li>
                    <li class="text-secondary"><small>
                            <a href="">6285756187433</a>
                        </small></li>
                    <li class="text-secondary"><small>
                            <a href="">info@samtam.tech</a>
                        </small></li>
                    <li class="text-secondary"><small>
                            <a href="">Makassar, Indonesia</a>
                        </small></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    animateCard('.img-card-wrapper', 'mouseover', '-10px', '-5deg');
    animateCard('.img-card-wrapper', 'mouseleave', '10px', '5deg');
    animateCard('.img-card-mobile-wrapper', 'mouseover', '-10px', '-5deg');
    animateCard('.img-card-mobile-wrapper', 'mouseleave', '10px', '5deg');

    function animateCard(arrTargetCard, event, tranlateX, rotate) {
        document.querySelectorAll(arrTargetCard).forEach(el => {
            el.addEventListener(event, function() {
                let bgDiagonal = el.querySelector('.bg-diagonal');
                bgDiagonal.style.transform = "translateX(" + tranlateX + ") rotate(" + rotate + ")"
            })
        });
    }


    // Get the dark mode toggle button element
    var toggleMode = document.getElementById('toggleMode');

    // Get the current dark mode state from localStorage (default to false if not set)
    var isDarkMode = JSON.parse(localStorage.getItem('darkMode')) || false;

    // Set the initial dark mode state
    setDarkMode(isDarkMode);

    // Add event listener to the dark mode toggle button
    toggleMode.addEventListener('click', function() {
        // Toggle the dark mode state
        isDarkMode = !isDarkMode;
        // Update the dark mode state in localStorage
        localStorage.setItem('darkMode', JSON.stringify(isDarkMode));
        // Update the UI to reflect the dark mode state
        setDarkMode(isDarkMode);
    });

    // Function to enable or disable dark mode based on the state
    function setDarkMode(isDark) {
        var body = document.body;
        if (isDark) {
            // Add dark mode styles or class to the body element
            body.classList.add('dark-mode');
            document.querySelector('nav li a i').className = 'fa-regular fa-sun';
            let heroImg = document.querySelector('.dark-mode #hero img');
            if (heroImg) {
                heroImg.src = './assets/img/logo_g.png'
            }

        } else {
            // Remove dark mode styles or class from the body element
            body.classList.remove('dark-mode');
            document.querySelector('nav li a i').className = 'fa-regular fa-moon';
            let heroImg = document.querySelector('#hero img');
            if (heroImg) {
                heroImg.src = './assets/img/logo.png';
            }

        }
    }

    // changesImages();

    // function changesImages() {
    //     if (document.body.classList.contains('dark-mode')) {


    //     } else {


    //     }
    // }

    AOS.init({
        duration: 500, // Animation duration in milliseconds
        // delay: 200, // Delay between animations in milliseconds
        easing: 'ease-in-out', // Animation easing function
        offset: 0, // Offset (in pixels) from the top of the viewport to start the animation
        // once: true // Whether to animate the element only once or every time it comes into view
    });
</script>
</body>

</html>