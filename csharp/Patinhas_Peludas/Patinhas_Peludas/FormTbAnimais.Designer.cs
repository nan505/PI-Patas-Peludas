namespace Patinhas_Peludas
{
    partial class FormTbAnimais
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
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
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            dgvTbAnimais = new DataGridView();
            tBoxNome = new TextBox();
            btnConsultarNome = new Button();
            ((System.ComponentModel.ISupportInitialize)dgvTbAnimais).BeginInit();
            SuspendLayout();
            // 
            // dgvTbAnimais
            // 
            dgvTbAnimais.AllowUserToAddRows = false;
            dgvTbAnimais.AllowUserToDeleteRows = false;
            dgvTbAnimais.ColumnHeadersHeightSizeMode = DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            dgvTbAnimais.Location = new Point(59, 12);
            dgvTbAnimais.Name = "dgvTbAnimais";
            dgvTbAnimais.ReadOnly = true;
            dgvTbAnimais.Size = new Size(697, 290);
            dgvTbAnimais.TabIndex = 0;
            // 
            // tBoxNome
            // 
            tBoxNome.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point, 0);
            tBoxNome.Location = new Point(59, 342);
            tBoxNome.Name = "tBoxNome";
            tBoxNome.Size = new Size(160, 35);
            tBoxNome.TabIndex = 1;
            // 
            // btnConsultarNome
            // 
            btnConsultarNome.Font = new Font("Segoe UI", 14.25F, FontStyle.Regular, GraphicsUnit.Point, 0);
            btnConsultarNome.Location = new Point(225, 342);
            btnConsultarNome.Name = "btnConsultarNome";
            btnConsultarNome.Size = new Size(157, 35);
            btnConsultarNome.TabIndex = 2;
            btnConsultarNome.Text = "Pesquisar nome";
            btnConsultarNome.UseVisualStyleBackColor = true;
            btnConsultarNome.Click += btnConsultarNome_Click;
            // 
            // FormTbAnimais
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(btnConsultarNome);
            Controls.Add(tBoxNome);
            Controls.Add(dgvTbAnimais);
            Name = "FormTbAnimais";
            Text = "Patinhas Peludas - Formulário de Animais";
            Load += FormTbAnimais_Load;
            ((System.ComponentModel.ISupportInitialize)dgvTbAnimais).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private DataGridView dgvTbAnimais;
        private TextBox tBoxNome;
        private Button btnConsultarNome;
    }
}