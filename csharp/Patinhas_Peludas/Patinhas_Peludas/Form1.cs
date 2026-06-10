namespace Patinhas_Peludas
{
    public partial class FormInicio : Form
    {
        public FormInicio()
        {
            InitializeComponent();
        }

        private void btnTbAdotantes_Click(object sender, EventArgs e)
        {

        }

        private void btnTbAnimais_Click(object sender, EventArgs e)
        {
            FormTbAnimais formTbAnimais = new FormTbAnimais();

            formTbAnimais.ShowDialog();
        }
    }
}
