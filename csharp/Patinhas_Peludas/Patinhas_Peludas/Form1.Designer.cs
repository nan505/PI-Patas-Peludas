namespace Patinhas_Peludas
{
    partial class FormInicio
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            btnTbAnimais = new Button();
            btnTbAdotantes = new Button();
            SuspendLayout();
            // 
            // btnTbAnimais
            // 
            btnTbAnimais.Font = new Font("Segoe UI", 15.75F);
            btnTbAnimais.Location = new Point(212, 186);
            btnTbAnimais.Name = "btnTbAnimais";
            btnTbAnimais.Size = new Size(140, 79);
            btnTbAnimais.TabIndex = 0;
            btnTbAnimais.Text = "Tabela de animais";
            btnTbAnimais.UseVisualStyleBackColor = true;
            btnTbAnimais.Click += btnTbAnimais_Click;
            // 
            // btnTbAdotantes
            // 
            btnTbAdotantes.Font = new Font("Segoe UI", 15.75F);
            btnTbAdotantes.Location = new Point(358, 186);
            btnTbAdotantes.Name = "btnTbAdotantes";
            btnTbAdotantes.Size = new Size(140, 79);
            btnTbAdotantes.TabIndex = 1;
            btnTbAdotantes.Text = "Tabela de adotantes";
            btnTbAdotantes.UseVisualStyleBackColor = true;
            // 
            // FormInicio
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(btnTbAdotantes);
            Controls.Add(btnTbAnimais);
            Name = "FormInicio";
            Text = "Patinhas Peludas - Início";
            ResumeLayout(false);
        }

        #endregion

        private Button btnTbAnimais;
        private Button btnTbAdotantes;
    }
}
