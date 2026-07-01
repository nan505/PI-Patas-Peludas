namespace Patinhas_Peludas
{
    partial class FormTbAdotante
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
            dgvTabelaAdotante = new DataGridView();
            tbPesquisar = new TextBox();
            btnPesquisar = new Button();
            ((System.ComponentModel.ISupportInitialize)dgvTabelaAdotante).BeginInit();
            SuspendLayout();
            // 
            // dgvTabelaAdotante
            // 
            dgvTabelaAdotante.ColumnHeadersHeightSizeMode = DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            dgvTabelaAdotante.Location = new Point(12, 12);
            dgvTabelaAdotante.Name = "dgvTabelaAdotante";
            dgvTabelaAdotante.Size = new Size(818, 361);
            dgvTabelaAdotante.TabIndex = 0;
            // 
            // tbPesquisar
            // 
            tbPesquisar.Location = new Point(322, 398);
            tbPesquisar.Name = "tbPesquisar";
            tbPesquisar.Size = new Size(207, 23);
            tbPesquisar.TabIndex = 1;
            // 
            // btnPesquisar
            // 
            btnPesquisar.Location = new Point(349, 427);
            btnPesquisar.Name = "btnPesquisar";
            btnPesquisar.Size = new Size(158, 41);
            btnPesquisar.TabIndex = 2;
            btnPesquisar.Text = "Pesquisar Nome";
            btnPesquisar.UseVisualStyleBackColor = true;
            btnPesquisar.Click += btnPesquisar_Click;
            // 
            // FormTbAdotante
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(842, 511);
            Controls.Add(btnPesquisar);
            Controls.Add(tbPesquisar);
            Controls.Add(dgvTabelaAdotante);
            Name = "FormTbAdotante";
            Text = "FormTbAdotante";
            ((System.ComponentModel.ISupportInitialize)dgvTabelaAdotante).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private DataGridView dgvTabelaAdotante;
        private TextBox tbPesquisar;
        private Button btnPesquisar;
    }
}