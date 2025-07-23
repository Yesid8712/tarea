"""vocales.py
Ejemplo 2: Contador de vocales.
Cuenta cuántas vocales hay en una cadena de texto.
"""

def contador_vocales(texto: str) -> int:
    """Devuelve el número de vocales en `texto`."""
    vocales = "aeiouáéíóúäëïöüAEIOUÁÉÍÓÚÄËÏÖÜ"
    cuenta = 0
    for caracter in texto:          # Bucle
        if caracter in vocales:     # Condicional
            cuenta += 1
    return cuenta


if __name__ == "__main__":
    ENTRADA = "Hola Mundo"
    SALIDA = contador_vocales(ENTRADA)
    print(f"Entrada: {ENTRADA!r} -> Número de vocales: {SALIDA}")
