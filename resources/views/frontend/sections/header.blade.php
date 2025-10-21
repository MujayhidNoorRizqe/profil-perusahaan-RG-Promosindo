<style>
/* === HEADER === */
.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
    padding: 0; /* hilangkan padding biar nempel atas */
    background: transparent; /* transparan seperti template archi */
}

/* bungkus logo dan burger menu */
.header-inner {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    width: 100%;
    height: 90px; /* tinggi seragam seperti di template */
}

/* === LOGO === */
.logo {
    position: absolute;
    top: 25px;
    left: 35px;
    background: #111;
    padding: 10px 18px;
    display: inline-block;
    z-index: 10000;
    transition: all 0.3s ease;
}
.logo img {
    width: 60px;
    height: auto;
    display: block;
}

/* === BURGER MENU === */
.menu-icon {
    position: absolute;
    top: 35px;
    right: 45px;
    width: 26px;
    height: 20px;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    z-index: 10000;
    transition: all 0.3s ease;
}
.menu-icon span {
    display: block;
    height: 3px;
    background: #fff;
    border-radius: 2px;
    transition: all 0.3s ease;
}

/* === OVERLAY MENU === */
.overlay-menu {
    position: fixed;
    inset: 0;
    background: #1c1c1c;
    color: #fff;
    visibility: hidden;
    opacity: 0;
    transition: all 0.4s ease;
    z-index: 9998;
}
.overlay-menu.active {
    visibility: visible;
    opacity: 1;
}
.overlay-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.overlay-content h5 {
    color: #c4a68a;
    margin-bottom: 12px;
}
.menu-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.menu-list li {
    margin: 14px 0;
}
.menu-list li a {
    color: #c4a68a;
    font-weight: 700;
    font-size: 30px;
    text-decoration: none;
    transition: all 0.3s;
}
.menu-list li a:hover {
    color: #fff;
}
.close-menu {
    position: absolute;
    top: 25px;
    right: 40px;
    font-size: 42px;
    color: #c4a68a;
    cursor: pointer;
    transition: all 0.3s;
}
.close-menu:hover {
    color: #fff;
}

/* Efek kecil saat overlay muncul (animasi lembut) */
.overlay-menu.active .overlay-content {
    animation: fadeInUp 0.6s ease;
}
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translate(-50%, -40%);
    }
    100% {
        opacity: 1;
        transform: translate(-50%, -50%);
    }
}
</style>