import pygame
import sys

pygame.init()
x = 400
y = 300
velocidade = 10

janela = pygame.display.set_mode((800, 600))
pygame.display.set_caption("Atividade Machine Learning")

janela_aberta = True
while janela_aberta :
    pygame.time.delay(50)


    for evente in pygame.event.get():
        if evente.type == pygame.QUIT:
            janela_aberta = False
    comandos = pygame.key.get_pressed()
    if comandos[pygame.K_UP] :
        y -= velocidade
    if comandos[pygame.K_DOWN] :
        y += velocidade
    if comandos[pygame.K_RIGHT] :
        x += velocidade
    if comandos[pygame.K_LEFT] :
        x -= velocidade


    janela.fill((0,0,0))
    # da esquerda pra direita  --> matriz de cor RGB, posição para aparecer na janela, raio do circulo
    pygame.draw.circle(janela, (0, 255, 0), (x, y), 50)
    pygame.display.update()

pygame.quit()
