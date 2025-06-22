from PIL import Image, ImageDraw
import os

img = Image.new('RGB', (1366, 250), color='#4F46E5')
draw = ImageDraw.Draw(img)

for y in range(250):
    r = int(79 + (139-79) * (y/250))
    g = int(70 + (92-70) * (y/250))
    b = int(229 + (246-229) * (y/250))
    draw.line([(0, y), (1366, y)], fill=(r, g, b))

img.save('public/images/top-banner.png')
print(f'Background image created successfully: {img.size[0]}x{img.size[1]}px')
