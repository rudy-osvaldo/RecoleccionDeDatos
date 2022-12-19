import { Router } from './functions.js';
import { selectGraphic } from './select.js';
import { textradio } from './textradio.js';


/**
 * Cargar textradio
 */
Router(textradio, '/questions.php?group=3&page=8');
Router(selectGraphic, '/');