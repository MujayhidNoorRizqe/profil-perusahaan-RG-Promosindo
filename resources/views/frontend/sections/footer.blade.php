<footer id="footer" class="footer">
    <div class="container text-center">
        <div class="footer-logo mb-3">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="120">
        </div>
        <p class="footer-text mb-1">
            © {{ date('Y') }} CV. Restu Guru Promosindo. All Rights Reserved.
        </p>
        <p class="small">
            Designed with ❤️ using Archi template.
        </p>

        <ul class="social-icons mt-3">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>
</footer>

<style>
.footer {
    background: #1d1d1d;
    color: #ccc;
    padding: 60px 0;
    font-size: 14px;
}
.footer-logo img {
    filter: brightness(0.9);
}
.footer-text {
    color: #ddd;
    margin-bottom: 4px;
}
.social-icons {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 16px;
    padding: 0;
}
.social-icons li a {
    color: #c4a68a;
    font-size: 20px;
    transition: 0.3s;
}
.social-icons li a:hover {
    color: #b49174;
}
</style>
