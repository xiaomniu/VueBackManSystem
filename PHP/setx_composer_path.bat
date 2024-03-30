set prox_port=%1
setx "http_proxy" "http://127.0.0.1:%prox_port%"
setx "https_proxy" "http://127.0.0.1:%prox_port%"

