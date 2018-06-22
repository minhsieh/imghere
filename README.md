imghere
==========

An API provides placeholder blank image or random high quanlity photograph from [unsplash.com](https://unsplash.com) with any size your application want.

How to use
-----------
Blank placeholder

![imghere with 200x100](http://imghere.imin.tw/key?w=300&h=100)

```html
<img src="http://imghere.imin.tw/test?w=300&h=100" alt="placeholder img">
```

With custom text

![imghere with custom text](http://imghere.imin.tw/key?w=250&h=120&text=Hello imghere)

```html
<img src="http://imghere.imin.tw/key?w=250&h=120&text=Hello imghere" alt="placeholder image">
```

Random photo

![imghere with 400x150](http://imghere.imin.tw/test?w=400&h=150)

```html
<img src="http://imghere.imin.tw/test?w=400&h=150" alt="placeholder img">
```

ToDo
------

- Blur and greyscale effect
- URLs pretty(ex: /?w=200&h=100   ----->  /200x100)
