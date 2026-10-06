import './bootstrap';
import '../css/app.css';

import AOS from 'aos';
import 'aos/dist/aos.css';
import './bootstrap';

import { createIcons } from 'lucide';

createIcons();

AOS.init({
    duration: 1000,
    once: true,
    
});