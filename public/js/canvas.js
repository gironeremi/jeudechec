class Canvas {
    constructor() {
      this.canvas = document.getElementById("chessboard");
      this.ctx = this.canvas.getContext("2d");
      var squareSize = 50
      for (let i = 0; i < 8; i++) {
        for (let j = 0; j < 8; j++) {
          this.ctx.fillStyle = (i + j) % 2 === 0 ? 'white' : 'black';
          this.ctx.fillRect(i * squareSize, j * squareSize, squareSize, squareSize);
        }
      }
  }
}