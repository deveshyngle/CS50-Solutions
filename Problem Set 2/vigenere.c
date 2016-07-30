//vigenere

#include <stdio.h>
#include <cs50.h>
#include <string.h>
#include <ctype.h>

int main (int argc, string argv[])
{
    if (argc != 2)
    {
        printf("Usage: /pset2/vigenere <key> \n");
        return 1;
    }
    else if (argv[1])
    {
        int l = strlen(argv[1]);
        for (int i = 0; i < l; i++)
        {
            if (!isalpha(argv[1][i]))
            {
                printf("Usage: /pset2/vigenere <key> \n");
                return 1;
            }
        }
    }

string secretmessage = GetString();
        
int i = 0;
int m = 0;
int n = 0;
int keyindex = 0;
string k = argv[1];
        
for (i = 0, n = strlen(secretmessage); i < n; i++)
    { 
        if (isalpha(secretmessage[i]))
        {
            keyindex = m % strlen(k);
            if (islower(secretmessage[i]))
            {
                if (islower(k[keyindex]))
                {
                    int a = ((secretmessage[i] - 97 + k[keyindex] - 97) % 26) + 97;
                    printf("%c", a);
                }
                else
                {
                    int a = ((secretmessage[i] - 97 + k[keyindex] - 65) % 26) + 97;
                    printf("%c", a);
                }
            }
            if (isupper(secretmessage[i]))
            {
                if (islower(k[keyindex]))
                {
                    int b = ((secretmessage[i] - 65 + k[keyindex] - 97) % 26) + 65;
                    printf("%c", b);
                }
                else
                {
                    int b = ((secretmessage[i] - 65 + k[keyindex] - 65) % 26) + 65;
                    printf("%c", b);
                }
            }
        m++;
        }
        else
        {
            printf("%c", secretmessage[i]);
        }
    }
    printf("\n");
}

