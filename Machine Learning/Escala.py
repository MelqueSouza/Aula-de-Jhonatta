import pygame
import sys

pygame.init()

largura, altura = 400, 400
janela = pygame.display.set_mode((largura, altura))
pygame.display.set_caption("Escala de Objeto")

preto = (0, 0, 0)
branco = (255, 255, 255)

objeto_cor = branco
objeto_tamanho = 100
objeto_x, objeto_y = largura // 2, altura // 2

# Ponto de escala (centro do objeto)
ponto_escala_x = objeto_x
ponto_escala_y = objeto_y

# Fatores de escala (1.0 = sem escala)
escala_x = 1.0
escala_y = 1.0

# Velocidade de escala
velocidade_escala = 0.0002

def desenhar_objeto(x, y, largura, altura):
    pygame.draw.rect(janela, objeto_cor, (x - largura / 2, y - altura / 2, largura, altura))

# Loop principal
executando = True
while executando:
    for evento in pygame.event.get():
        if evento.type == pygame.QUIT:
            executando = False

    # Obtém as teclas pressionadas
    teclas = pygame.key.get_pressed()

    # Verifica as teclas para redimensionar o objeto
    if teclas[pygame.K_UP]:
        escala_x += velocidade_escala
        escala_y += velocidade_escala
    if teclas[pygame.K_DOWN]:
        escala_x -= velocidade_escala
        escala_y -= velocidade_escala

    # Limpa a tela
    janela.fill(preto)

    # Desenha o objeto redimensionado
    largura_redimensionada = objeto_tamanho * escala_x
    altura_redimensionada = objeto_tamanho * escala_y
    desenhar_objeto(objeto_x, objeto_y, largura_redimensionada, altura_redimensionada)

    # Atualiza a tela
    pygame.display.update()

# Encerra o Pygame
pygame.quit()
sys.exit()
