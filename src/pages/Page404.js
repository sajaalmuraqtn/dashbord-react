import { Helmet } from 'react-helmet-async';
import { Link as RouterLink } from 'react-router-dom';
// @mui
import { styled } from '@mui/material/styles';
import { Button, Typography, Container, Box } from '@mui/material';

// ----------------------------------------------------------------------

const StyledContent = styled('div')(({ theme }) => ({
  maxWidth: 480,
  margin: 'auto',
  minHeight: '100vh',
  display: 'flex',
  justifyContent: 'center',
  flexDirection: 'column',
  padding: theme.spacing(12, 0),
}));

// ----------------------------------------------------------------------

export default function Page404() {
  return (
    <>
      <Helmet>
        <title> 404 الصفحة غير موجودة|ادارةالديون </title>
      </Helmet>

      <Container>
        <StyledContent sx={{ textAlign: 'center', alignItems: 'center' }}>
          <Typography variant="h3" paragraph>
          عذراَ !، لم يتم العثور على الصفحة
          </Typography>

          <Typography sx={{ color: 'text.secondary' }}>
          معذرةً ، لم نتمكن من العثور على الصفحة التي تبحث عنها. 
           . ربما أخطأت في كتابة عنوان الرابط تأكد من املاء العنوان الخاص بك
             
          </Typography>

          <Box
            component="img"
            src="/assets/illustrations/illustration_404.svg"
            sx={{ height: 260, mx: 'auto', my: { xs: 5, sm: 10 } }}
          />

          <Button to="/" size="large" variant="contained" component={RouterLink}>
            الذهاب إلى الصفحة الرئيسية
          </Button>
        </StyledContent>
      </Container>
    </>
  );
}
